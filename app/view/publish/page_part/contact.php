<section class="py-5">
    <div class="container">
        <div class="text-center"><h1>Send Your Opineon</h1></div>
        <div class="row">
            <div class='col-md-3'>
            </div>
            <div class='col-md-6'>  
                <form role="form" action="<?php echo BASE_URL."publish_contact_page_controller_class/insert_content_method" ?>" method="post">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" id="" name="title">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" id="" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control" id="" name="mobile">
                    </div>
                    <div class="form-group py-1">
                        <label for="">Message</label>
                        <textarea name="message" class="form-control" rows="10"></textarea>
                    </div>
                        <button type="submit" class="form-control btn btn-info" name="submit">Send</button>   
                </form>       
            </div>
            <div class='col-md-3'>
            </div>
        </div>
    </div>
</section>