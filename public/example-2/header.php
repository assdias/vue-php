<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a
      class="p-2 text-dark"
      href="#"
    >Features
    </a>
    <a
      class="p-2 text-dark"
      href="#"
    >Enterprise
    </a>
    <a
      class="p-2 text-dark"
      href="#"
    >Support
    </a>
    <a
      class="p-2 text-dark"
      href="#"
    >Pricing
    </a>
  </nav>
  <a
    class="btn"
    href="javascript: void(0)"
    :class="like ? 'btn-outline-success' : 'btn-outline-danger'"
    @click="toggleLikeApp"
  >
    {{ like ? 'I like this app' : 'I don\'t like this app' }}
  </a>
</div>