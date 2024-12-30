// contact.js

document
  .getElementById("contact-form")
  .addEventListener("submit", async function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    const result = await fetch(`https://kewan.fr/portfolio/contact.php`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });


    if (result.status === 200) {
      document.getElementById("result-div").classList.add("bg-green-700");
      document.getElementById("result-div").classList.remove("hidden");
      document.getElementById("result-div").classList.remove("bg-red-700");

      document.getElementById("result_msg").innerText =
        "Merci pour votre message, il a bien été envoyé !";
      form.reset();
    } else {
      document.getElementById("result-div").classList.add("bg-red-700");
      document.getElementById("result-div").classList.remove("hidden");
      document.getElementById("result-div").classList.remove("bg-green-700");

      document.getElementById("result_msg").innerText =
        "Une erreur s'est produite. Réessayez plus tard.";
    }

    setTimeout(() => {
      document.getElementById("result-div").classList.add("hidden");
    }, 10000); // 10 secondes
  });
