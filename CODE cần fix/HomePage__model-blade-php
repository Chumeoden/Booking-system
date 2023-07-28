<!-- Khung modal -->
<div class="modal-overlay" id="modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()"><i class="ri-close-fill"></i></span>
                @auth
                    <h2>{{ Auth::user()->name }}</h2>
                    <button data-action="logout">Đăng xuất</button>
                    <button data-action="editProfile">Chỉnh sửa profile</button>
                @else
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endauth
            </div>
        </div>



        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openModalBtn = document.querySelector(".user-icon a");
            const modalOverlay = document.querySelector(".modal-overlay");

            function openModal() {
                modalOverlay.style.display = "flex"; // Hiển thị khung modal
            }

            function closeModal() {
                modalOverlay.style.display = "none"; // Ẩn khung modal
            }

            function logout() {
                fetch('/logout', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                    .then(response => {
                        if (response.ok) {
                            closeModal(); // Đóng khung modal sau khi đăng xuất thành công
                            window.location.href = '/'; // Điều hướng về trang chủ sau khi đăng xuất
                        } else {
                            console.error('Có lỗi xảy ra khi đăng xuất');
                        }
                    })
                    .catch(error => {
                        console.error('Có lỗi xảy ra khi gửi yêu cầu đăng xuất', error);
                    });
            }

            function editProfile() {
                // Add your edit profile logic here
                console.log('Edit profile clicked!');
            }

            openModalBtn.addEventListener("click", openModal);

            // Hide the modal when the page loads if the user is not authenticated
            if (!@json(Auth::check())) {
                closeModal();
            }

            modalOverlay.addEventListener("click", function (event) {
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });

            const logoutBtn = document.querySelector("#modal button[data-action='logout']");
            if (logoutBtn) {
                logoutBtn.addEventListener("click", logout);
            }

            const editProfileBtn = document.querySelector("#modal button[data-action='editProfile']");
            if (editProfileBtn) {
                editProfileBtn.addEventListener("click", editProfile);
            }

            // Listen for logout event and close the modal after successful logout
            window.addEventListener('logout', closeModal);
        });
    </script>
