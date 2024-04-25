const buttons = document.querySelectorAll("#response");

for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    button.addEventListener("click", (e) => {
        const parentElement = e.target.parentNode;
        const existingTextarea = parentElement.querySelector('textarea');
        
        if (existingTextarea) {
            existingTextarea.remove();
        } else {
            const area = document.createElement('textarea');
            parentElement.insertBefore(area, e.target.nextSibling);

            const sendButton = document.createElement('button');
            sendButton.textContent = 'Send';
            
            sendButton.addEventListener('click', () => {
                const text = area.value;
                console.log(text);
            });
            parentElement.appendChild(sendButton);
        }
        e.target.style.display = 'none';
    });
}
