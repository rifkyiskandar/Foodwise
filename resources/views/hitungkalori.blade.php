<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Entry</title>
    <link rel="stylesheet" href="{{ asset('css/hitungkalori.css') }}">
</head>
<body>
    <header>
        <div class="header-left">
            <img src="assets/profile.png" alt="Profile Picture" class="profile-pic">
            <span>Rifky</span>
        </div>
        <nav>
            <a href="/akun">Account</a>
            <a href="/diet">Plans</a>
            <a href="/hitungkalori">Calculate Calories</a>
            <a href="/forum">Community</a>
            <a href="/home">About</a>
            <a href="/home">Home</a>
        </nav>
    </header>
    <main>
        <h1>Food Entry</h1>
        <form action="/hitungkalori" method="POST">
            @csrf
            <table id="food-table">
                <thead>
                    <tr>
                        <th>Food</th>
                        <th>Qty</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input name="foods[0][name]" type="text" placeholder="Food"></td>
                        <td><input name="foods[0][qty]" type="text" placeholder="Qty"></td>
                        <td>
                            <select name="foods[0][unit]">
                                <option value="gr">GR</option>
                                <option value="pcs">PCS</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="add-food-btn" type="button" onclick="addFoodRow()">+ Add New Food</button>
            <div class="upload-section">
                <label for="upload-input" class="upload-btn">Upload Image</label>
                <input type="file" id="upload-input" style="display:none" onchange="previewAndSaveImage(event)">
                <img src="" alt="Preview of Food Image" class="food-image" id="food-image">
            </div>
            <button class="next-btn" type="submit">Next</button>
        </form>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <span>FoodWise</span>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Customer Care</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <form>
                    <label for="email">Contact Us With Email</label>
                    <input type="email" id="email" placeholder="Your email address...">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <span>Terms & Conditions | Privacy Policy | Accessibility | Legal</span>
            <span>Design with love @ FoodWise Studio 2024. All rights reserved</span>
        </div>
    </footer>
    <script src="{{ asset('js/food-entry.js') }}"></script>
    <script>
        let foodIndex = 1;

        function addFoodRow() {
            const table = document.getElementById('food-table').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();

            const foodCell = newRow.insertCell(0);
            const qtyCell = newRow.insertCell(1);
            const unitCell = newRow.insertCell(2);

            foodCell.innerHTML = `<input name="foods[${foodIndex}][name]" type="text" placeholder="Food">`;
            qtyCell.innerHTML = `<input name="foods[${foodIndex}][qty]" type="text" placeholder="Qty">`;
            unitCell.innerHTML = `<select name="foods[${foodIndex}][unit]">
                                    <option value="gr">GR</option>
                                    <option value="pcs">PCS</option>
                                  </select>`;

            foodIndex++;
        }

        function previewAndSaveImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('food-image');
                output.src = reader.result;
                localStorage.setItem('foodImage', reader.result);
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
