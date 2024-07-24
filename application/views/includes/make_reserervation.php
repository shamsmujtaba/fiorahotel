<div class="mt-4">

    <form class="head-form">

        <div class="row">

            <div class="col-md-12">

                <div class="sec-title-sm">Make Reservation</div>

            </div>

        </div>
        
        <div class="col-md-12 row-p">
        <label>Arrival Date*</label>
                <div class="datetime-picker-container d-block">
                <input type="text" id="ChkinDate" name="checkin_date" class="datepicker"
                    placeholder="DD/MM/YYYY" >
                    <label for="ChkinDate" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                </div>
        </div>
        <div class="col-md-12 row-p">
            <label>Departure Date*</label>
                <div class="datetime-picker-container d-block">
                <input type="text" id="ChkoutDate" name="checkout_date" class="datepicker"
                    placeholder="DD/MM/YYYY" >
                    <label for="ChkoutDate" class="calendar-icon"><i class="fa fa-calendar"></i></label>
                </div>
        </div>

        <div class="col-md-12 row-p">

            <select name="adults" class="select-css">
                <option value="">Adults</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
            </select>

        </div>

        <div class="col-md-12 row-p">
            <select  name="children" class="select-css">
                <option value="">Children</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
            </select>
        </div>

        <div class="col-md-12"><button onclick="window.location.href='https://hotel4u.pk/fioramurree/reserve?id=<?=$rid?>';" type="button" class="book-btn">Book This Room</button></div>

        <div class="clearfix"></div>

    </form>
</div>