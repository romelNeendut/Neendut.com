
Vue.component('modal', {
  template: '#show-sign-in',
  props: {
    show: {
      type: Boolean,
      required: true,
      twoWay: true
    }
  }
})


$(document).ready(function ()
{
  // $( "#form-profile-submit" ).click(function(){
  //   $( "#form-profile:first" ).submit(function( event ) {
  //     swal("Success!", "You have updated your profile.", "success")
  //   });
  //
  // })

  $( "#submit_profile_form" ).click(function( event ) {
    $.post( '/profile/update', $('#profile_form').serialize(), function(data) {
        swal("Success!", "You have updated your profile.", "success")
      },
      'json' // I expect a JSON response
   );

  });

});
// new Vue({
//     el: '#profile-page',
//     data: {
//
//     },
//     ready: function () {
//       // this.fetchProfile();
//     },
//     methods: {
//
//         fetchProfile: function () {
//
//           this.$http.get('/profile/get-profile').then((response) => {
//               console.log(response.data);
//             this.$set('profile', response.data);
//           });
//         },
//         updateProfile: function() {
//
//           $( "#form-profile" ).submit(function( event ) {
//             swal("Success!", "You have updated your profile.", "success")
//             event.preventDefault();
//           });
//
//         },
//     }
// });
