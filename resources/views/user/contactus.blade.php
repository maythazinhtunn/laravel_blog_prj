@extends('layouts.pagelayout') @section('content')
<div class="container-fluid">
    <h1 class="mt-4">Contact Us</h1>
    <div class="row">
        <!-- map here -->
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255281.22544737195!2d103.70416145515345!3d1.3139961237931617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da11238a8b9375%3A0x887869cf52abf5c4!2sSingapore!5e0!3m2!1sen!2smm!4v1645851059365!5m2!1sen!2smm"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
        </div>

        <!-- Contact Us form -->
        <div class="col-md-6">
            <form>
                <div class="col text-center"><h3>Contact Us</h3></div>
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input
                        type="text"
                        id="form4Example1"
                        class="form-control"
                    />
                    <label class="form-label" for="form4Example1"
                        >User Name</label
                    >
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input
                        type="email"
                        id="form4Example2"
                        class="form-control"
                    />
                    <label class="form-label" for="form4Example2"
                        >Email address</label
                    >
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea
                        class="form-control"
                        id="form4Example3"
                        rows="4"
                    ></textarea>
                    <label class="form-label" for="form4Example3"
                        >Message</label
                    >
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="form4Example4"
                        checked
                    />
                    <label class="form-check-label" for="form4Example4">
                        Send me a copy of this message
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Send
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
