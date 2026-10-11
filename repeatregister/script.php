<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            $(".register-card")
                .animate({ opacity: 1 }, 500)
                .queue(function (next) {
                    $(this).addClass("is-visible");
                    next();
                });

            $(".toggle-password").on("click", function () {
                const passwordInput = $(this).siblings("input");
                const shouldShow = passwordInput.attr("type") === "password";

                passwordInput.attr("type", shouldShow ? "text" : "password");
                $(this)
                    .text(shouldShow ? "Hide" : "Show")
                    .attr("aria-label", shouldShow ? "Hide password" : "Show password")
                    .attr("aria-pressed", shouldShow);
            });
        });
    </script>