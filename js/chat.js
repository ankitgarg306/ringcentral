	// Add message to chat - function call on form submit

	const base_url = window.location.origin + '/ringcentral/index.php';
	var receiver_id = null;

	function send_message(sender_id) { //pass chat user id and sender id
		var message = $('.message').val();
		if (/\S/.test(message)) {
			var html = '<div class="chat"><div class="chat-body"><div class="chat-content">' + '<p>' + message + '</p>' + '</div></div></div>';
			$('.chats:last-child').append(html);
			$('.message').val('');
			$('.user-chats').scrollTop($('.user-chats > .chats').height());
			const date = new Date();
			const [month, day, year] = [date.getMonth(), date.getDate(), date.getFullYear()];
			const [hour, minutes, seconds] = [date.getHours(), date.getMinutes(), date.getSeconds()];
			const datestring = `${year}:${month}:${day} ${hour}:${minutes}:${seconds}`

			$.ajax({
				// Our sample url to make request 
				url: `${base_url}/send`,
				data: {
					sender_id: sender_id,
					user_id: receiver_id,
					status: 1,
					msg_type: 1,
					message: message,
					created_on: datestring
				},

				// Type of Request
				type: "POST",

				// Function to call when to
				// request is ok 
				success: function (x) {
					// var x = JSON.stringify(data);
					console.log(x);
				},
				// Error handling 
				error: function (error) {
					console.log(`Error ${error}`);
				}
			});
		}
	}


	function fetch_messages(userid, user_firstname, user_lastname, senderid) {
		$("#activechat").load(" #activechat > *"); // reload div on chat user changes

		$.ajax({

			// Our sample url to make request 
			url: `${base_url}/message`,

			// Type of Request
			type: "POST",
			data: {
				sender_id: senderid,
				user_id: userid,
			},
			// Function to call when to
			// request is ok 
			success: function (data) {
				// var x = JSON.stringify(data);
				// console.log(x);
				const startChat = document.getElementById('startChat');
				const activeChat = document.getElementById('activechat');
				startChat.style.display = "none";
				activeChat.style.display = "block";
				// chat user changes

				const chatuser = document.getElementById('chatusername');
				chatuser.innerHTML = user_firstname + " " + user_lastname;
				receiver_id = userid;
				//add message to screen
				data.map(val => {
					console.log(val);
					if (val.msg_type == 1) {
						var html = '<div class="chat"><div class="chat-body"><div class="chat-content">' + '<p>' + val.message + '</p>' + '</div></div></div>';
						$('.chats:last-child').append(html);
						$('.user-chats').scrollTop($('.user-chats > .chats').height());
					} else {
						var html = '<div class="chat chat-left"><div class="chat-body"><div class="chat-content">' + '<p>' + val.message + '</p>' + '</div> </div></div>';
						$('.chats:last-child').append(html);
						$('.user-chats').scrollTop($('.user-chats > .chat-left').height());
					}
				});
			},
			// Error handling 
			error: function (error) {
				console.log(`Error ${error}`);
			}
		});
	}
