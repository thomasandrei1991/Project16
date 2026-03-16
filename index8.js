function sendMessage() {
    let input = document.getElementById("user-input");
    let chatBox = document.getElementById("chat-box");

    let userMessage = input.value;

    chatBox.innerHTML += `<div class="user">${userMessage}</div>`;

    // Fake AI response
    setTimeout(() => {
        chatBox.innerHTML += `<div class="bot">Hello! I am your AI assistant 🤖</div>`;
    }, 500);

    input.value = "";
}