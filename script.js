document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("myForm");
  const dataTable = document.getElementById("dataTable");

  form.addEventListener("submit", function (event) {
    // event.preventDefault();
    handleFormSubmission();
  });

  function handleFormSubmission() {
    const name = escapeHTML(document.getElementById("name").value);
    const nim = escapeHTML(document.getElementById("nim").value);
    const checkbox = document.getElementById("checkbox").checked;
    const radio = escapeHTML(
      document.querySelector('input[name="radio"]:checked').value
    );
    const newRow = dataTable.querySelector("tbody").insertRow(-1);
    const cell1 = newRow.insertCell(0);
    const cell2 = newRow.insertCell(1);
    const cell3 = newRow.insertCell(2);
    const cell4 = newRow.insertCell(3);

    setCookie("user", JSON.stringify({ name, nim, checkbox, radio }));
    cell1.textContent = name;
    cell2.textContent = nim;
    cell3.textContent = checkbox ? "Valid" : "Tidak Valid";
    cell4.textContent = radio;

    form.reset();
  }

  function escapeHTML(html) {
    // Escape HTML untuk mencegah XSS
    const div = document.createElement("div");
    div.textContent = html;
    return div.innerHTML;
  }
  function setCookie(name, value, days) {
    const expires = new Date(
      Date.now() + days * 24 * 60 * 60 * 1000
    ).toUTCString();
    document.cookie = `${name}=${value}; expires=${expires}; path=/`;
  }

  // Function to get a cookie value by name
  function getCookie(name) {
    const cookies = document.cookie.split("; ");
    for (const cookie of cookies) {
      const [cookieName, cookieValue] = cookie.split("=");
      if (cookieName === name) {
        return cookieValue;
      }
    }
    return null;
  }
});
