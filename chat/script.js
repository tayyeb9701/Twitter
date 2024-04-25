function getMsg() {
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("POST", "vue_chat.php");
    requeteAjax.onload = () => {
        const result = JSON.parse(requeteAjax.responseText);
        //console.log(result);
        const html = result.map((message) => {
            return `
            <div class="message">
            <span class="date">${message.time.substring(11, 16)} :</span>
            <span class="author">${message.id_user}</span>
            <span class="content">${message.content}</span>
        </div>
        `
        }).join('');
        //console.log(html);
        const messages = document.querySelector('.messages');

        messages.innerHTML = html;
        messages.scrollTop = messages.scrollHeight;
    }
    requeteAjax.send();
}

function insertMsg(e) {
    e.preventDefault();

    const author = document.querySelector('#author');
    const content = document.querySelector('#content');

    const data = new FormData();
    data.append('author', author.value);
    data.append('content', content.value);

    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open('POST', 'ctrl_chat.php?task=write');

    requeteAjax.onload = () => {
        getMsg();
    }

    requeteAjax.send(data);
}

document.querySelector('form').addEventListener('submit', insertMsg);

window.onload = getMsg();