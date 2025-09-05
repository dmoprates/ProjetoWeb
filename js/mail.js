    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
          'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Obrigado pelo contato! Em breve retornaremos.";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! Houve um erro no envio do formulário! Favor enviar um email para o contato ao lado ;)"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! Houve um erro no envio do formulário! Favor enviar um email para o contato ao lado ;)"
      });
    }
    form.addEventListener("submit", handleSubmit)