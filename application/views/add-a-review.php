<style>
    .review-form {
        width: 70%;
        margin: 0 auto;
        background: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 100px;
    }

    h2 {
        color: #444;
    }

    fieldset {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
    }

    legend {
        padding: 0 10px;
        color: #555;
        font-weight: bold;
    }

    .service-item {
        display: block;
        margin-bottom: 10px;
    }

    .service-item input[type=radio] {
        margin-left: 10px;
        margin-right: 5px;
    }

    label {
        margin-right: 10px;
    }

    textarea {
        width: 100%;
        border: 1px solid #ddd;
    }

    button {
        background-color: #d49136;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #db9c4a;
    }
</style>
<div class="review-form ">
    <h2>Add Your Review</h2>
    <form action="<?= base_url() ?>Contact/submitReview" method="Post">
        <fieldset class="service-rating">
            <legend>Rate Our Services</legend>
            <label class="service-item">Timeliness:
                <input type="radio" name="timeliness" value="excellent" required> Excellent
                <input type="radio" name="timeliness" value="good" required> Good
                <input type="radio" name="timeliness" value="poor" required> Poor
            </label>
            <label class="service-item">Quality:
                <input type="radio" name="quality" value="excellent" required> Excellent
                <input type="radio" name="quality" value="good" required> Good
                <input type="radio" name="quality" value="poor" required> Poor
            </label>

            <label class="service-item">Comfort:
                <input type="radio" name="comfort" value="excellent" required> Excellent
                <input type="radio" name="comfort" value="good" required> Good
                <input type="radio" name="comfort" value="poor" required> Poor
            </label>

            <label class="service-item">Cleanliness:
                <input type="radio" name="cleanliness" value="excellent" required> Excellent
                <input type="radio" name="cleanliness" value="good" required> Good
                <input type="radio" name="cleanliness" value="poor" required> Poor
            </label>

            <label class="service-item">Ambience:
                <input type="radio" name="ambience" value="excellent" required> Excellent
                <input type="radio" name="ambience" value="good" required> Good
                <input type="radio" name="ambience" value="poor" required> Poor
            </label>
            <!-- Repeat for other services -->
        </fieldset>

        <fieldset class="customer-feedback">
            <legend>Comments and Suggestions</legend>
            <textarea name="comments" rows="4" required></textarea>
        </fieldset>

        <fieldset class="customer-info">
            <legend>Customer Information</legend>
            <label>Name: <input placeholder="Ali" type="text" name="customer_name" class="form-control" required></label>
            <label>Cell No: <input placeholder="0300xxxxxxx" type="number" name="contact_no" class="form-control" required></label>
            <label>Room No: <input placeholder="50" type="number" name="roomId" class="form-control" required></label>
            <label>Date: <input type="date"  name="checkout_date" placeholder="Select date" class="datepicker flatpickr-input active" style="color: #444;" required></label>
        </fieldset>

        <button type="submit">Submit Review</button>
    </form>
</div>
