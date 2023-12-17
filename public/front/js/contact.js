const form = document.querySelector('form');
const fullName = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("message");


function sendEmail() {

    const bodyMessage = `
        Nama: ${fullName.value}<br>
        Email: ${email.value}<br>
        Nomor Telepon: ${phone.value}<br>
        Pesan: ${message.value}
    `;
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "yourheal18@gmail.com",
        Password : "7CCDCD413DF64CFE629DB262340BF6DC0C92",
        To : 'yourheal18@gmail.com',
        From : "yourheal18@gmail.com",
        Subject : "YourHeal Pertanyaan",
        Body : bodyMessage
    }).then(
      message => {
        if (message == "OK") {
            Swal.fire({
                title: "Berhasil!",
                text: "Pertanyaan Anda sudah terkirim!",
                icon: "success"
              });
        }
      }
    );
}

form.addEventListener("submit", (e) => {
    e.preventDefault();

    sendEmail();
});