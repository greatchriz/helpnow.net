<form
    id="volunteer_apply_form"
    class="bg-light p-30 pb-15"
    name="job_apply_form"
    action="https://kodesolution.com/html/2017/fundpro-html/demo/includes/become-volunteer.php"
    method="post"
    enctype="multipart/form-data"
>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="form_name">Name <small>*</small></label>
                <input
                    id="form_name"
                    name="form_name"
                    type="text"
                    placeholder="Enter Name"
                    required=""
                    class="form-control"
                >
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="form_email">Email <small>*</small></label>
                <input
                    id="form_email"
                    name="form_email"
                    class="form-control required email"
                    type="email"
                    placeholder="Enter Email"
                >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="form_sex">Sex <small>*</small></label>
                <select
                    id="form_sex"
                    name="form_sex"
                    class="form-control required"
                >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="form_branch">Choose Branch <small>*</small></label>
                <select
                    id="form_branch"
                    name="form_branch"
                    class="form-control required"
                >
                    <option value="UK">UK</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="form_message">Message <small>*</small></label>
        <textarea
            id="form_message"
            name="form_message"
            class="form-control required"
            rows="3"
            placeholder="Your cover letter/message sent to the employer"
        ></textarea>
    </div>
    <div class="form-group">
        <label for="form_attachment">C/V Upload</label>
        <input
            id="form_attachment"
            name="form_attachment"
            class="file"
            type="file"
            multiple
            data-show-upload="false"
            data-show-caption="true"
        >
    </div>
    <div class="form-group">
        <input
            id="form_botcheck"
            name="form_botcheck"
            class="form-control"
            type="hidden"
            value=""
        />
        <button
            type="submit"
            class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10"
            data-loading-text="Please wait..."
        >Apply Now</button>
    </div>
</form>
