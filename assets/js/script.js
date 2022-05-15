// Consulta Ajax para Cadastrar Usuario

$("body").on("submit", "#cadastro_form", function (e) {
  e.preventDefault();

  let nome = $("#nome_cadastro").val();
  let email_cadastro = $("#email_cadastro").val();
  let senha_cadastro = $("#senha_cadastro").val();

  $.ajax({
    url: "controller/validacao.php",
    method: "POST",
    data: {
      nome: nome,
      email_cadastro: email_cadastro,
      senha_cadastro: senha_cadastro,
    },
    dataType: "json",
  }).done(function (result) {
    if (result == 1) {
      Swal.fire({
        icon: "success",
        title: "Usuario Cadastrado com sucesso!",
        showConfirmButton: false,
      });
      setTimeout(function () {
        window.location = "pages/login.php";
      }, 1700);
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: result,
      });
    }
  });
});

// Consulta Ajax para Login Usuario

$("body").on("submit", "#login_form", function (e) {
  e.preventDefault();

  let email_login = $("#email_login").val();
  let senha_login = $("#senha_login").val();

  $.ajax({
    url: "../controller/validacao.php",
    method: "POST",
    data: { email_login: email_login, senha_login: senha_login },
    dataType: "json",
  }).done(function (result) {
    if (result == 1) {
      window.location = "home.php";
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: result,
      });
    }
  });
});

// Deletar Usuario

function deletar() {
  Swal.fire({
    title: "Deseja realmente excluir sua conta?",
    showCancelButton: true,
    confirmButtonText: "Excluir",
    cancelButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "../controller/validacao.php",
        method: "POST",
        data: { deletar: "yes" },
        dataType: "json",
      });

      window.location = "login.php";
    }
  });
}

// Atualizar dados Usuario

$("body").on("submit", "#editar_form", function (e) {
  e.preventDefault();

  let nome = $("#nome_editar").val();
  let email_editar = $("#email_editar").val();
  let senha_editar = $("#senha_editar").val();

  $.ajax({
    url: "../controller/validacao.php",
    method: "POST",
    data: {
      nome: nome,
      email_editar: email_editar,
      senha_editar: senha_editar,
    },
    dataType: "json",
  }).done(function (result) {
    if (result == 1) {
      Swal.fire({
        icon: "success",
        title: "Dados Atualizados",
      });
    } else {
      Swal.fire({
        icon: "error",
        title: "Erro ao Atualizar...",
        text: result,
      });
    }
  });
});
