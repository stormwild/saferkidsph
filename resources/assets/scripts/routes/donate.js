export default {
  init() {
    // JavaScript to be fired on the donate page
    // Once shown calling modal show again has no effect
    (function($){
      $(function() {
        console.log('Donate modal show from loaded route script')
        $('#donateModal').modal('show')
      })
    })(jQuery)
  },
};
