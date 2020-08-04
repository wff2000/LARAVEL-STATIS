<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>

    <h4>Sign Up Form</h4>

    <form action="{{ url('welcome') }}">
        <div>
            <label for="fname">First name:</label><br>
            <br>
            <input type="text" id="fname" name="fname"><br>
            <br>
            <label for="lname">Last name:</label><br>
            <br>
            <input type="text" id="lname" name="lname"><br>
            <br>
        </div>

        <div>
            <label for="gender">Gender:</label><br>
            <br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            <br>
        </div>

        <div>
            <label for="nationality">nationality:</label><br>
            <br>
            <select id="nationality" name="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Australian">Australian</option>
            </select><br>
            <br>
        </div>

        <div>
            <p>Language Spoken</p>
            <input type="checkbox" id="BIndo" name="language1" value="Bahasa Indonesia">
            <label for="language1">Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="language2" value="english">
            <label for="language2">English</label><br>
            <input type="checkbox" id="other" name="language3" value="other">
            <label for="language3">Other</label>
            <br>
        </div>

        <div>
            <p>Bio:</p>
            <textarea name="bio" rows="10" cols="35">
            </textarea>
            <br>
        </div>

        <input type="submit" value="Sign Up">
    </form>
</body>

</html>
