<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DH Accountant</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <?php include('components/nav.php'); ?>

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>DH Accountant</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim ipsum corporis animi consequuntur nam,
                voluptas dicta repellat aspernatur, dolores error hic earum ex reiciendis ratione. Officia a vitae neque
                magni.</p>
            <a href="#" class="btn btn-success">Learn more</a>
        </div>

        <div class="row">
            <h2 class="text-center text-success">Features</h2>
            <hr>
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Account Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create multiple accounts</li>
                            <li>Transaction history</li>
                            <li>Account Balance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Business Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create multiple businesses</li>
                            <li>Invoices per Business</li>
                            <li>Customers per Business</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Invoice Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create invoices</li>
                            <li>Send invoices to customers</li>
                            <li>View invoice status</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="text-center text-primary">Plans</h2>
            <hr>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Account Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create multiple accounts</li>
                            <li>Transaction history</li>
                            <li>Account Balance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Business Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create multiple businesses</li>
                            <li>Invoices per Business</li>
                            <li>Customers per Business</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Invoice Management
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Create invoices</li>
                            <li>Send invoices to customers</li>
                            <li>View invoice status</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="text-center text-info">Contact us</h2>
            <hr>
            <div class="col-sm-6">
                <h2 class="text-info">Visit Us</h2>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28862724.707148906!2d-12.123131927931151!3d27.98527281942553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11049f97943543ed%3A0xd46570d1c2e24336!2sDevelopment%20HUB!5e0!3m2!1sen!2sng!4v1663843572561!5m2!1sen!2sng" 
                    width="600" height="450" style="border:0;" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-sm-6">
                <h2 class="text-info">Send Message</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="" required="required"
                            title="">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" value="" required="required"
                            title="">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" value="" required="required"
                            title=""></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container">

            </div>
        </footer>
    </div>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>