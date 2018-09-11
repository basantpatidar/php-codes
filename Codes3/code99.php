<!-- HTML CSS Drop Down menu -->
<!DOCTYPE html>

<html>
<head>
    <title>HTML2_Gupta_Akshay</title>
    <style>
        body {
            padding: 20px;
            font-family: arial;
            background-color: #F6F6F6;
        }
        th{
            color: #2672A6;
            font-size: 28px;
        }
        input[type="submit"] {
            background-color: #26A69A;
            color: white;
            padding: 8px 10px;
            margin: 0px 0px 0px 7px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="reset"] {
            background-color: #A06066;
            color: white;
            padding: 8px 10px;
            margin: 0px 7px 0px 0px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        img {
            display: block;
            padding: 10px 0px;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
        .container {
            margin: auto;
            width: 28%;
            border: 2px solid black;
            border-radius: 5px;
            padding: 10px;
            display: table;
        }
    </style>
</head>

<body>
<div class="container">
    <form method="post" action="userInfo.php">
        <table>
            <tr>
                <th colspan=2><strong>Form Template</strong></th>
            </tr>
            <tr>
                <td colspan=2><img src="https://goo.gl/kFnGiu" alt="User Img"></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type	="text" name="lastname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea rows="3" cols="21" name="address"></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><select name="month">
                        <option selected value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="day">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="year">
                        <option value="2013">2016</option>
                        <option value="2012">2017</option>
                        <option selected value="2018">2018</option>
                    </select></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender"> Female <input type="radio" name="gender" checked> Male</td>
            </tr>
            <tr>
                <td>Highest Education</td>
                <td><input type="checkbox" name="education"> High School <input type="checkbox" name="education"> BS <input type="checkbox" name="education" checked> MS</td>
            </tr>
            <tr>
                <td>Link</td>
                <td><a href="https://www.linkedin.com/in/guptakshay/">Click Here!</a></td>
            </tr>
            <tr>
                <td colspan=2 align="center"><input type="reset" name="reset"><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
code32.php
Displaying code32.php.
