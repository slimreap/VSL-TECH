<style>
   body {
        margin: 0;
        padding-bottom: 80px;
        position: relative;
        min-height: 100vh;
      }
      #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 80px;
        background-color: #f5f5f5;
      }
      .footer-top {
        padding: 30px 0;
      }
      .footer-top h3 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      .footer-top p {
        font-size: 14px;
        line-height: 24px;
        color: #6c757d;
      }
      .footer-newsletter input[type="email"] {
        border: none;
        padding: 10px;
        width: 70%;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 0px;
        background: #f0f0f0;
      }
      .footer-newsletter input[type="submit"] {
        background-color: #1abc9c;
        border: none;
        color: #fff;
        padding: 10px 20px;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 5px;
        cursor: pointer;
        width: 28%;
      }
      .footer-newsletter input[type="submit"]:hover {
        background-color: #128f76;
      }
      .social-links a {
        font-size: 24px;
        display: inline-block;
        margin-right: 20px;
        color: #6c757d;
      }
      .social-links a:hover {
        color: #1abc9c;
      }
      .footer-bottom {
        background-color: #343a40;
        color: #fff;
        padding: 10px 0;
      }
      .footer-bottom a {
        color: #fff;
      }
      .footer-bottom a:hover {
        color: #1abc9c;
      }
      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
      @media (max-width: 767px) {
        .footer-top {
          text-align: center;
        }
        .footer-newsletter input[type="email"] {
          width: 100%;
          margin-right: 5px;
        }
        .footer-newsletter input[type="submit"] {
          width: 100%;
          margin-left: 0px;
        }
      }
</style>
<footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>VSL TECH</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
  </footer>