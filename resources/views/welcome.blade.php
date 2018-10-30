<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AWH2YAbzGMKECSHBOw0_BVRFX9tclShcg512AHr9bMNBBG7esnuYwsXPTf0HagiyszMCbyOyhqJoeo9o',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'blue',
      shape: 'pill',
    },
    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
          redirect_urls:{
              return_url:'http://localhost:8000/execute-payment'
          },
        transactions: [{
          amount: {
            total: '20',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      console.log(data)
      return actions.redirect();
    }
  }, '#paypal-button');

</script>