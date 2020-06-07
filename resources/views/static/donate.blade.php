<section class="section-donate-main bg-dark">
  <script>
    (function($){
      $(function() {
        console.log('Donate modal show from static script')
        $('#donateModal').modal('show')
      })
    })(jQuery)
  </script>
  <div id="donateModal" class="modal fade show" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <p>You will be redirected to a new page.</p>
            <p><a href="#">Proceed</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

