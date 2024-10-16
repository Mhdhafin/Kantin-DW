function showLoading() {
    document.getElementById("loading-overlay").classList.remove("hidden");
}

function hideLoading() {
    document.getElementById("loading-overlay").classList.add("hidden");
}

// Menampilkan loading saat halaman mulai berpindah
window.addEventListener("beforeunload", showLoading);

// Menyembunyikan loading saat halaman selesai dimuat
window.addEventListener("load", hideLoading);

// Untuk Ajax requests menggunakan Axios (yang biasanya digunakan di Laravel)
if (window.axios) {
    axios.interceptors.request.use(
        function (config) {
            showLoading();
            return config;
        },
        function (error) {
            hideLoading();
            return Promise.reject(error);
        }
    );

    axios.interceptors.response.use(
        function (response) {
            hideLoading();
            return response;
        },
        function (error) {
            hideLoading();
            return Promise.reject(error);
        }
    );
}

document.querySelectorAll(".delayed-link").forEach(function (link) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const href = this.getAttribute("data-href");

        setTimeout(function () {
            window.location.href = href;
        }, 1000); // Delay 2000ms (2 detik)
    });
});

const list = document.querySelectorAll(".list");

function activeLink() {
    list.forEach((item) => item.classList.remove("active"));
    this.classList.add("active");
}
list.forEach((item) => item.addEventListener("click", activeLink));

// Set event listener untuk menu dengan penundaan

// document.querySelectorAll(".delayed-link").forEach(function (link) {
//     link.addEventListener("click", function (event) {
//         event.preventDefault();
//         const href = this.getAttribute("data-href");

//         // Store the active link in localStorage
//         localStorage.setItem("activeLink", href);

//         setTimeout(function () {
//             window.location.href = href;
//         }, 1000); // Delay 1000ms (1 second)
//     });
// });

// showLoading();

// const list = document.querySelectorAll(".list");

// // Function to set the active link based on localStorage
// function setActiveLink() {
//     const activeLink = localStorage.getItem("activeLink");
//     if (activeLink) {
//         list.forEach((item) => {
//             const link = item.querySelector(".delayed-link");
//             if (link && link.getAttribute("data-href") === activeLink) {
//                 item.classList.add("active");
//             } else {
//                 item.classList.remove("active");
//             }
//         });
//     }
// }

// // Initialize the active link on page load
// window.addEventListener("load", setActiveLink);
