<div class="c-content f-arialn">
    <div class="c-judul lb">
        <h1 class="judul">Buat Semester</h1>
        <p class="sub-judul">tentukan semester perkuliahan anda.</p>
    </div>


    <div class="cf-semester">
        <form action="/studyvault/actions/process/process-semester.php" method="POST">
            <input type="text" value="<?= $_SESSION['user_id'] ?>" hidden name="user_id" >
            <div class="select-semester">
                <label class="select"><b>semester :</b></label>
                <select class="select" name="semester" id="">
                    <option value="semester 1">semester 1</option>
                    <option value="semester 2">semester 2</option>
                    <option value="semester 3">semester 3</option>
                    <option value="semester 4">semester 4</option>
                    <option value="semester 5">semester 5</option>
                    <option value="semester 6">semester 6</option>
                </select>
            </div>
            <input type="submit">
        </form>
    </div>
</div>