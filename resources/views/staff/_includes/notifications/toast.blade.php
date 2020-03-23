<div id="toast-notifications" style="display:none;"></div>
<script>
  var notifications = new Vue({
    el: '#toast-notifications',
    data: {
      session: {!!json_encode(LaraFlash::allByType())!!},
      validMethods: ['general', 'primary', 'success', 'info', 'warning', 'danger', 'snackbar']
    },
    mounted: function() {
      let vm = this;
      this.$nextTick(function() {
        vm.session.forEach(function(e) {
          if (_.includes(vm.validMethods, e.type.toLowerCase())) {
            vm[e.type.toLowerCase()](e.content);
          } else {
            vm.general(e.content);
          }
        });
      })
    },
    methods: {
      general: function(msg, pos = 'is-top', dur = 5000, color = 'is-dark') {
        this.$toast.open({
              duration: dur,
              message: msg,
              position: pos,
              type: color
          });
      },
      primary: function(msg, pos = 'is-top', dur = 5000) {
        this.$toast.open({
              duration: dur,
              message: msg,
              position: pos,
              type: 'is-primary'
          });
      },
      success(msg, pos = 'is-top', dur = 5000) {
                this.$buefy.toast.open({
                    duration: dur,
                    message: msg,
                    position: pos,
                    type: 'is-info'
                })
      },
     info(msg, pos = 'is-top', dur = 5000) {
                this.$buefy.toast.open({
                    duration: dur,
                    message: msg,
                    position: pos,
                    type: 'is-info'
                })
      },
      warning(msg, pos = 'is-top', dur = 5000) {
                this.$buefy.toast.open({
                     duration: dur,
                    message: msg,
                    position: pos,
                    type: 'is-warning'
                })
      },
      danger(msg, pos = 'is-top', dur = 5000) {
                this.$buefy.toast.open({
                    duration: dur,
                    message: msg,
                    position: pos,
                    type: 'is-danger'
                })
      },
      snackbar(msg, optionsPassed = {}, callback) {
        const defaults = {
          position: 'is-bottom-right',
          duration: 5000,
          type: 'is-success',
          actionText: 'Ok'
        };
        const options = Object.assign({}, defaults, optionsPassed);
        this.$buefy.snackbar.open({
              duration: options.duration,
              message: msg,
              type: options.type,
              position: options.position,
              actionText: options.actionText,
              onAction: () => {
                if (typeof callback === 'function') callback();
              }
          })
      },
      toast(msg,optionsPassed = {}) {
          //console.log(optionsPassed);
          const defaults = {
          position: 'is-top',
          duration: 5000,
          type: 'is-dark'
        };
          const options = Object.assign({}, defaults, optionsPassed);
          //console.log(options);
                //this.$buefy.toast.open('Something happened')
                this.$buefy.toast.open({
                    duration: 5000,
                    message: msg,
                    position: 'is-top',
                    type: options.type
                })
            },
      /*toast(msg, optionsPassed = {}) {
        const defaults = {
          position: 'is-top',
          duration: 5000,
          type: 'is-dark'
        };
        const options = Object.assign({}, defaults, optionsPassed);
        this.$buefy.$toast.open({
              duration: options.duration,
              message: msg,
              position: options.position,
              type: options.type
          });
      }*/
    }
  })
</script>
