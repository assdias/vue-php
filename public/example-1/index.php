<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  >
  <title>Floating labels example · Bootstrap</title>

  <link
    rel="canonical"
    href="https://getbootstrap.com/docs/4.3/examples/floating-labels/"
  >
  <!-- Bootstrap core CSS -->
  <link
    href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  >
  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  </style>
  <!-- Custom styles for this template -->
  <link
    href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css"
    rel="stylesheet"
  >
</head>
<body>
  <form
    class="form-signin"
    method="post"
    action="index.php?submitted=true"
  >
    <div class="text-center mb-4">
      <img
        class="mb-4"
        src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg"
        alt=""
        width="72"
        height="72"
      >
    </div>

    <div class="form-label-group">
      <input
        type="email"
        name="email"
        id="inputEmail"
        class="form-control"
        placeholder="Email address"
        required
        autofocus
        v-model="post.email"
      >
      <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
      <input
        :type="password.type"
        name="password"
        id="inputPassword"
        class="form-control"
        placeholder="Password"
        required
        v-model="post.password"
        @dblclick="changePasswordType"
      >
      <label for="inputPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input
          type="checkbox"
          value="remember-me"
          v-model="post.remember"
        >
        Remember me
      </label>
    </div>

    <button
      :disabled="!post.remember"
      class="btn btn-lg btn-primary btn-block"
      type="submit"
    >
      Sign in
    </button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
    <details>
      <summary>JavaScript</summary>
      <pre>{{ post }}</pre>
    </details>
    <details>
      <summary>PHP</summary>
      <pre><?php var_dump($_POST); ?></pre>
    </details>

    <hr>

    <div class="text-center mb-4">
      <p><i>Exemplo retirado da documentação</i>
        <a href="https://getbootstrap.com/docs/4.3/examples/floating-labels">(link do original)</a>
      </p>
    </div>
    <div class="text-center mb-4">
      <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element.
        <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a>
      </p>
    </div>
  </form>
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="script.js"></script>
</body>
</html>
