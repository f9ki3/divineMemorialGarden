function searchUsers() {
  var input = document.getElementById('searchInput').value;
  var dataList = document.getElementById('userList');
  
  // Clear previous options
  dataList.innerHTML = '';

  // Make AJAX request to fetch users based on input
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var users = JSON.parse(xhr.responseText);
        users.forEach(function(user) {
          var option = document.createElement('option');
          option.value = user.user_fname + ' ' + user.user_lname;
          dataList.appendChild(option);
        });
      } else {
        console.error('Request failed');
      }
    }
  };

  xhr.open('GET', '../php/search_users.php?input=' + input, true);
  xhr.send();
}

function generatePassword() {
  // Generate password logic here
}

// Event listener for input change
document.getElementById('searchInput').addEventListener('input', function() {
  document.getElementById('usernameInput').value = '';
  document.getElementById('passwordInput').value = '';
  document.getElementById('createButton').disabled = true;
});