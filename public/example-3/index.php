<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
  >
  <title>Pricing example · Bootstrap</title>

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
    href="https://getbootstrap.com/docs/4.3/examples/pricing/pricing.css"
    rel="stylesheet"
  >
</head>
<body>
  <div id="page">
    <app-header></app-header>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example.
        It’s built with default Bootstrap components and utilities with little customization.
      </p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0
              <small class="text-muted">/ mo</small>
            </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button
              type="button"
              class="btn btn-lg btn-block btn-outline-primary"
            >Sign up for free
            </button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">${{ prices.pro }}
              <small class="text-muted">/ mo</small>
            </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button
              type="button"
              class="btn btn-lg btn-block btn-primary"
            >Get started
            </button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">${{ prices.enterprise }}
              <small class="text-muted">/ mo</small>
            </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button
              type="button"
              class="btn btn-lg btn-block btn-primary"
            >Contact us
            </button>
          </div>
        </div>
      </div>

      <app-footer inline-template>
        <?php include __DIR__ . '/footer.php' ?>
      </app-footer>
    </div>
  </div>

  <script
    id="app-header-template"
    type="text/x-template"
  >
  <?php include __DIR__ . '/header.php' ?>
  </script>
  <!-- development version, includes helpful console warnings -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuex/dist/vuex.js"></script>
  <script src="script.js"></script>
</body>
</html>
