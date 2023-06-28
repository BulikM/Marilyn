@extends('layouts.frontend')
@section('title')

@endsection

@section('content')

    <div class="container-fluid p-0">
        <div class="row justify-content-center p-0">
            <img src="https://goop-img.com/wp-content/uploads/2018/04/goopIRL-LP-heroImg.jpg" alt="Find goop IRL" class="img-fluid">
        </div>
    </div>

    <!--main-->
    <main class="container">
        <div class="row">
            <fieldset class="border-0 shadow-lg col-11 m-5">
                <div class="col-10 mx-auto">
                    <h1 class="text-gTitel my-5">Contact US</h1>
                    <label for="conversationContactReason" class="label text-gOnderTitel">Contact Reason<span class="text-danger">*</span></label><div class="description text-g1 my-lg-3">Which of these options best describes the reason for your message today?</div>
                    <select class="form-select text-gTitelkl mb-3" id="conversationContactReason" aria-label="Default select example" required>
                        <option value=""disabled selected hidden>Select...</option>
                        <option value="1">Cancel / Edit Order Request (Order has NOT shipped)</option>
                        <option value="2">Order Issue / Inquiry (not a Cancel or Edit request)</option>
                        <option value="3">Return / Refund</option>
                        <option value="3">Product Issue / Inquiry / Feedback</option>
                        <option value="3">Sale / Promotions / Discounts</option>
                        <option value="3">Site Issue</option>
                        <option value="3">goop Newsletter</option>
                        <option value="3">goop Account</option>
                        <option value="3">Events / Retail Stores</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="col-12 m-auto mb-4">
                        <div id="invul" class="d-none">
                            <div class="input-group form-control has-feedback p-0 mb-3 fs-4">
                                <i class="bi bi-person-fill ps-1"></i>
                                <input type="text" class="form-control text-gTitelkl border-0" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-control has-feedback p-0 mb-3 fs-4">
                                <i class="bi bi-envelope-at-fill ps-2"></i>
                                <input type="text" class="form-control text-gTitelkl border-0" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-control has-feedback p-0 mb-3 fs-4">
                                <i class="bi bi-phone-fill ps-1"></i>
                                <input type="text" class="form-control text-gTitelkl border-0" placeholder="Phone Number" aria-label="Phone Number" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-control has-feedback p-0 mb-3 fs-4 p-1">
                                <i class="bi bi-chat-dots-fill ps-1"></i>
                                <!--		<input type="text" class="form-control text-gTitelkl border-0" placeholder="Message" aria-label="Message" aria-describedby="basic-addon1">-->
                                <textarea id="textarea" class="border-0 col text-gTitelkl pt-2 ps-2 h-300" placeholder="Message" aria-required="false" aria-invalid="true"></textarea>
                            </div>
                        </div>
                        <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LfixdYUAAAAAGKmWPtQZtV-437a3N43-zjUbJFS&amp;co=aHR0cHM6Ly9oZWxwLmdvb3AuY29tOjQ0Mw..&amp;hl=nl&amp;v=pn3ro1xnhf4yB8qmnrhh9iD2&amp;size=normal&amp;cb=jqocs2jg9gop" width="304" height="78" role="presentation" name="a-4a6jpd116r3v" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" class="col-12"></iframe>
                        <!--				btn-->
                        <button class="btn btn-g btn-dark rounded-0 btn-submit" type="submit" disabled="">Submit</button>
                    </div>

                </div>
            </fieldset>
        </div>
        </div>

    </main>
@endsection
