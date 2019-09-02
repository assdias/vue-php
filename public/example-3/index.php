<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  >
  <title>Bootstrap</title>

  <link
    rel="canonical"
    href="https://getbootstrap.com/docs/4.3/examples/pricing/"
  >

  <!-- Bootstrap core CSS -->
  <link
    href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  >

  <style>
  #app {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
  }

  .page {
    width: 400px;
    padding: 20px;
    box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28);
    border-radius: 4px;
  }
  </style>
  <!-- Custom styles for this template -->
  <link
    href="https://getbootstrap.com/docs/4.3/examples/pricing/pricing.css"
    rel="stylesheet"
  >
</head>
<body>
  <div
    id="app"
    class="container"
  >
    <router-view></router-view>
  </div>

  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue-router/dist/vue-router.js"></script>
  <script src="services.js" type="module"></script>
  <script src="appTable.js" type="module"></script>
  <script src="appForm.js" type="module"></script>
  <script src="script.js" type="module"></script>
</body>
</html>
