<style>
    :root {
        --primary-color: #A13A28;
        --secondary-color: #7A2A1C;
        --text-color: #333333;
        --light-bg: #FFFFFF;
        --border-color: #E0E0E0;
        --shadow-sm: 0 4px 16px rgba(0, 0, 0, 0.08);
        --shadow-md: 0 6px 24px rgba(0, 0, 0, 0.12);
        --transition: all 0.3s ease-in-out;
        --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    /* Container Fluid */
    .container-fluid {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    /* Top Strip */
    .top-strip {
        background: linear-gradient(135deg, var(--color-one), var(--color-two));
        z-index: 1100;
        font-family: var(--font-family);
        width: 100%;
        padding: 0.9rem 0;
        box-shadow: var(--shadow-sm);
    }

    .top-strip .container-fluid {
        padding: 0 2rem;
    }

    .top-strip span {
        font-size: 0.95rem;
        color: #FFFFFF;
        font-weight: 600;
        letter-spacing: 0.06rem;
        text-transform: uppercase;
        transition: var(--transition);
    }

    .top-strip img {
        height: 36px;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        transition: transform var(--transition);
    }

    .top-strip img:hover {
        transform: scale(1.1) rotate(2deg);
    }

    @media (max-width: 576px) {
        .top-strip span {
            font-size: 0.9rem;
        }

        .top-strip img {
            height: 30px;
        }

        .top-strip .container-fluid {
            padding: 0 1rem;
        }
    }

    [dir="rtl"] .top-strip span {
        margin-left: 0.75rem;
        margin-right: 0;
    }

    /* Navbar */
    .NAVBAR {
        backdrop-filter: saturate(200%) blur(24px);
        background-color: rgba(255, 255, 255, 0.95);
        border-bottom: 1px solid rgba(161, 58, 40, 0.25);
        transition: var(--transition);
        z-index: 1099;
        position: sticky;
        top: 0;
        box-shadow: var(--shadow-sm);
    }

    .NAVBAR.sticky-shadow {
        box-shadow: var(--shadow-md);
        background-color: rgba(255, 255, 255, 1);
    }

    .navbar-brand {
        flex: 0 1 auto;
        max-width: 200px;
        margin: 0 1rem;
        text-align: center;
    }

    .NAVBAR-logo {
        max-height: 82px;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.6s ease, transform 0.6s ease;
        filter: drop-shadow(0 3px 5px rgba(0, 0, 0, 0.1));
        width: auto;
        max-width: 100%;
        object-fit: contain;
        padding: 0;
    }

    .NAVBAR-logo:hover {
        transform: translateY(-2px) scale(1.04);
    }

    .fade-in {
        opacity: 1 !important;
        transform: translateY(0) !important;
        height: 80px;
        width: 150px;
        object-fit: cover;
    }

    .NAVBAR-link {
        position: relative;
        margin: 0 0.8rem;
        font-size: 0.98rem;
        text-transform: uppercase;
        color: var(--color-text-body);
        font-weight: 500;
        transition: var(--transition);
        letter-spacing: 0.04rem;
        border-radius: 12px;
        z-index: 1101;
        pointer-events: auto;
    }

    .NAVBAR-link::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2.5px;
        bottom: 3px;
        left: 50%;
        background-color: var(--color-text-title);
        transition: width 0.3s ease, left 0.3s ease;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .NAVBAR-link:hover::after,
    .NAVBAR-link.active::after {
        width: 80%;
    }

    .NAVBAR-link.active,
    .NAVBAR-link:hover {
        color: var(--color-text-title);
        font-weight: 600;
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.1), rgba(161, 58, 40, 0.05));
        transform: scale(1.03);
    }

    .NAVBAR-link:focus {
        outline: 2px solid var(--color-text-title);
        outline-offset: 3px;
        border-radius: 6px;
    }

    [dir="rtl"] .NAVBAR-link {
        margin: 0 0.8rem 0 0;
    }

    /* Left Section */
    .d-flex.order-1.order-lg-1 {
        flex: 1;
        padding-right: 1rem;
    }

    /* Right Section */
    .d-none.d-lg-flex.order-3 {
        flex: 1;
        justify-content: flex-end;
        padding-left: 1rem;
    }

    /* Social Icons */
    .NAVBAR-social {
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .NAVBAR-social a {
        font-size: 1.25rem;
        color: var(--color-text-title);
        transition: var(--transition);
        padding: 0.65rem;
        border-radius: 50%;
        background-color: rgba(75, 116, 206, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.4rem;
        height: 2.4rem;
        z-index: 1101;
    }

    .NAVBAR-social a:hover {
        color: #FFFFFF;
        background-color: var(--color-one);
        transform: translateY(-3px) scale(1.1);
        box-shadow: var(--shadow-sm);
    }

    .NAVBAR-social a:focus {
        outline: 2px solid var(--color-text-title);
        outline-offset: 4px;
    }

    /* Locale Switcher (Language + Currency) */
    .navbar-locale {
        margin-left: 1rem;
        position: relative;
        z-index: 1101;
    }

    .navbar-locale .nav-link {
        font-size: 0.92rem;
        color: var(--color-text-body);
        font-weight: 500;
        padding: 0.65rem 1.1rem;
        border-radius: 14px;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background-color: rgba(75, 116, 206, 0.1);
    }

    .navbar-locale .nav-link:hover,
    .navbar-locale .nav-link:focus {
        color: var(--color-text-title);
        background-color: rgba(75, 116, 206, 0.1);
        transform: scale(1.04);
        box-shadow: var(--shadow-sm);
    }

    .navbar-locale .nav-link:focus {
        outline: 2px solid var(--color-text-title);
        outline-offset: 3px;
    }

    .navbar-locale .bi-globe {
        font-size: 1.15rem;
        transition: transform 0.5s ease;
    }

    .navbar-locale .nav-link:hover .bi-globe,
    .navbar-locale .nav-link:focus .bi-globe {
        transform: rotate(180deg);
    }

    .navbar-locale .selected-locale {
        font-weight: 600;
        letter-spacing: 0.03rem;
    }

    .navbar-locale .dropdown-menu {
        border-radius: 16px;
        border: 1px solid var(--color-text-title);
        box-shadow: var(--shadow-md);
        padding: 0.7rem 0;
        min-width: 12.5rem;
        margin-top: 0.6rem;
        background: var(--light-bg);
        animation: dropdownFade 0.3s ease-out;
        z-index: 1102;
    }

    .navbar-locale .dropdown-header {
        font-size: 0.85rem;
        color: #666;
        font-weight: 600;
        padding: 0.5rem 1.3rem;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
    }

    .navbar-locale .dropdown-item {
        font-size: 0.92rem;
        padding: 0.65rem 1.3rem;
        color: var(--color-text-body);
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        transition: var(--transition);
        border-radius: 8px;
        margin: 0 0.6rem;
    }

    .navbar-locale .dropdown-item:hover,
    .navbar-locale .dropdown-item:focus {
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.1), rgba(161, 58, 40, 0.05));
        color: var(--color-text-title);
        transform: translateX(3px);
    }

    .navbar-locale .dropdown-item.active {
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.15), rgba(161, 58, 40, 0.1));
        color: var(--color-text-title);
        font-weight: 600;
        border-left: 3px solid var(--color-text-title);
    }

    .navbar-locale .dropdown-item:focus {
        outline: none;
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.15), rgba(161, 58, 40, 0.1));
    }

    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(-10px) scale(0.95);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    [dir="rtl"] .navbar-locale {
        margin-left: 0;
        margin-right: 1rem;
    }

    [dir="rtl"] .navbar-locale .dropdown-item {
        flex-direction: row-reverse;
        border-left: none;
        border-right: 3px solid var(--color-text-title);
        transform: translateX(0);
    }

    [dir="rtl"] .navbar-locale .dropdown-item:hover,
    [dir="rtl"] .navbar-locale .dropdown-item:focus {
        transform: translateX(-3px);
    }

    /* Avatar Icon */
    .navbar-avatar {
        margin-left: 1rem;
        position: relative;
        z-index: 1101;
    }

    .navbar-avatar .nav-link {
        font-size: 0.92rem;
        color: var(--color-text-body);
        font-weight: 500;
        padding: 0.65rem;
        border-radius: 50%;
        transition: var(--transition);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(75, 116, 206, 0.1);
        width: 2.4rem;
        height: 2.4rem;
    }

    .navbar-avatar .nav-link:hover,
    .navbar-avatar .nav-link:focus {
        color: var(--color-text-title);
        background-color: rgba(161, 58, 40, 0.15);
        transform: scale(1.1);
        box-shadow: var(--shadow-sm);
    }

    .navbar-avatar .nav-link:focus {
        outline: 2px solid var(--color-text-title);
        outline-offset: 3px;
    }

    .navbar-avatar .bi-person-circle {
        font-size: 1.25rem;
    }

    .navbar-avatar .dropdown-menu {
        border-radius: 16px;
        border: 1px solid var(--color-text-title);
        box-shadow: var(--shadow-md);
        padding: 0.7rem 0;
        min-width: 12.5rem;
        margin-top: 0.6rem;
        background: var(--light-bg);
        animation: dropdownFade 0.3s ease-out;
    }

    .navbar-avatar .dropdown-item {
        font-size: 0.92rem;
        padding: 0.65rem 1.3rem;
        color: var(--color-text-body);
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        transition: var(--transition);
        border-radius: 8px;
        margin: 0 0.6rem;
    }

    .navbar-avatar .dropdown-item:hover,
    .navbar-avatar .dropdown-item:focus {
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.1), rgba(161, 58, 40, 0.05));
        color: var(--color-text-title);
        transform: translateX(3px);
    }

    .navbar-avatar .dropdown-item.active {
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.15), rgba(161, 58, 40, 0.1));
        color: var(--color-text-title);
        font-weight: 600;
        border-left: 3px solid var(--color-text-title);
    }

    .navbar-avatar .dropdown-item:focus {
        outline: none;
        background: linear-gradient(90deg, rgba(161, 58, 40, 0.15), rgba(161, 58, 40, 0.1));
    }

    [dir="rtl"] .navbar-avatar {
        margin-left: 0;
        margin-right: 1rem;
    }

    [dir="rtl"] .navbar-avatar .dropdown-item {
        flex-direction: row-reverse;
        border-left: none;
        border-right: 3px solid var(--color-text-title);
        transform: translateX(0);
    }

    [dir="rtl"] .navbar-avatar .dropdown-item:hover,
    [dir="rtl"] .navbar-avatar .dropdown-item:focus {
        transform: translateX(-3px);
    }

    /* Burger Icon */
    .custom-toggler {
        border: none;
        background: transparent;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 24px;
        width: 30px;
        padding: 0;
        z-index: 1200;
        transition: var(--transition);
    }

    .custom-toggler:hover {
        transform: scale(1.1);
    }

    .custom-toggler:hover .toggler-icon {
        background-color: var(--color-text-title);
    }

    .custom-toggler:focus {
        outline: 2px solid var(--color-text-title);
        outline-offset: 3px;
    }

    .toggler-icon {
        height: 3px;
        width: 100%;
        background-color: var(--color-text-title);
        border-radius: 3px;
        transition: transform 0.4s ease, opacity 0.4s ease, background-color 0.3s ease;
    }

    .custom-toggler.open .top-bar {
        transform: rotate(45deg) translate(7px, 7px);
    }

    .custom-toggler.open .middle-bar {
        opacity: 0;
    }

    .custom-toggler.open .bottom-bar {
        transform: rotate(-45deg) translate(7px, -7px);
    }

    /* Collapse Panel (Mobile) */
    .custom-collapse {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--light-bg);
        z-index: 1100;
        padding: 1.6rem 0;
        box-shadow: var(--shadow-md);
        transition: transform 0.4s ease, opacity 0.4s ease;
        transform: translateY(-12px);
        opacity: 0;
        pointer-events: none;
    }

    .custom-collapse.show {
        display: block;
        transform: translateY(0);
        opacity: 1;
        pointer-events: auto;
    }

    body.menu-open {
        overflow: hidden;
    }

    /* Responsive: Large Screens */
    @media (min-width: 992px) {
        .custom-toggler {
            display: none !important;
        }

        .custom-collapse {
            display: flex !important;
            position: static !important;
            flex-direction: row;
            align-items: center;
            background: transparent;
            box-shadow: none;
            transform: none !important;
            opacity: 1 !important;
            padding: 0;
            z-index: auto;
        }

        .navbar-nav {
            flex-direction: row !important;
            gap: 0.5rem;
        }

        .NAVBAR-social.d-lg-none {
            display: none !important;
        }

        .NAVBAR-social {
            gap: 0.8rem;
        }

        .navbar-avatar:hover .dropdown-menu,
        .navbar-locale:hover .dropdown-menu {
            display: block;
            animation: dropdownFade 0.3s ease-out;
        }
    }

    /* Responsive: Small Screens */
    @media (max-width: 991.98px) {
        .container-fluid {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .navbar-brand {
            margin: 0 0.5rem;
            max-width: 150px;
        }

        .NAVBAR-link {
            font-size: 1.05rem;
            padding: 0.9rem 1.3rem;
            margin: 0;
            border-bottom: 1px solid var(--border-color);
        }

        .NAVBAR-link:hover {
            background-color: rgba(161, 58, 40, 0.08);
            padding-left: 1.6rem;
        }

        .NAVBAR-logo {
            max-height: 52px;
        }

        .NAVBAR-social {
            justify-content: center;
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
            gap: 0.9rem;
        }

        .NAVBAR-social a {
            font-size: 1.5rem;
            width: 2.6rem;
            height: 2.6rem;
        }

        .navbar-locale,
        .navbar-avatar {
            margin-top: 1.2rem;
            margin-left: 0;
            width: 100%;
            text-align: center;
        }

        .navbar-locale .nav-link,
        .navbar-avatar .nav-link {
            justify-content: center;
            font-size: 1.05rem;
            padding: 0.9rem 1.4rem;
            border-radius: 10px;
        }

        .navbar-locale .dropdown-menu,
        .navbar-avatar .dropdown-menu {
            width: 90%;
            margin: 0.6rem auto;
            border-radius: 12px;
        }

        .navbar-locale .dropdown-item,
        .navbar-avatar .dropdown-item {
            padding: 0.8rem 1.2rem;
        }

        .custom-collapse {
            display: none;
        }

        .custom-collapse.show {
            display: block;
        }

        .d-flex.order-1.order-lg-1 {
            padding-right: 0.5rem;
        }
    }

    /* Cart Icon */
    .NAVBAR .bi-cart {
        font-size: 1.45rem;
        color: var(--color-text-title);
        transition: var(--transition);
    }

    .NAVBAR .bi-cart:hover {
        transform: rotate(10deg) scale(1.2);
        color: var(--color-text-title);
    }

    .nav-cart:focus .bi-cart {
        outline: 2px solid var(--color-text-title);
        outline-offset: 3px;
    }

    /* Cart Badge */
    .cart-badge {
        font-size: 0.7rem;
        padding: 0.25rem 0.45rem;
        min-width: 18px;
        height: 18px;
        line-height: 1.1rem;
        text-align: center;
        border-radius: 50%;
        position: absolute;
        top: -9px;
        right: -9px;
        background: linear-gradient(135deg, var(--color-one), var(--color-two));
        color: #FFFFFF;
        font-weight: 600;
        animation: bounceIn 0.4s ease;
        box-shadow: 0 2px 5px rgba(220, 53, 69, 0.25);
        border: 1.5px solid #FFFFFF;
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        50% {
            transform: scale(1.3);
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .nav-cart {
        padding: 0.6rem;
        border-radius: 50%;
        transition: var(--transition);
        z-index: 1101;
        cursor: pointer;
    }

    .nav-cart:hover {
        background-color: rgba(161, 58, 40, 0.1);
    }

    /* =====================
       CART MODAL STYLES
    ===================== */
    .cart-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9000;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.35s ease, visibility 0.35s ease;
        backdrop-filter: blur(3px);
    }

    .cart-modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .cart-modal-panel {
        position: fixed;
        top: 0;
        right: -100%;
        width: 100%;
        max-width: 440px;
        height: 100%;
        background: #FFFFFF;
        z-index: 9001;
        display: flex;
        flex-direction: column;
        transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: -8px 0 40px rgba(0, 0, 0, 0.15);
    }

    .cart-modal-panel.active {
        right: 0;
    }

    [dir="rtl"] .cart-modal-panel {
        right: auto;
        left: -100%;
        box-shadow: 8px 0 40px rgba(0, 0, 0, 0.15);
    }

    [dir="rtl"] .cart-modal-panel.active {
        left: 0;
    }

    .cart-modal-header {
        background: linear-gradient(135deg, var(--color-one), var(--color-two));
        color: #FFFFFF;
        padding: 1.4rem 1.6rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-shrink: 0;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
    }

    .cart-modal-header h5 {
        margin: 0;
        font-size: 1.15rem;
        font-weight: 700;
        letter-spacing: 0.04rem;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .cart-modal-close {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: #FFFFFF;
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
        font-size: 1.1rem;
    }

    .cart-modal-close:hover {
        background: rgba(255, 255, 255, 0.35);
        transform: rotate(90deg) scale(1.1);
    }

    .cart-modal-body {
        flex: 1;
        overflow-y: auto;
        padding: 1.4rem;
    }

    .cart-modal-body::-webkit-scrollbar {
        width: 6px;
    }

    .cart-modal-body::-webkit-scrollbar-track {
        background: #f5f5f5;
        border-radius: 10px;
    }

    .cart-modal-body::-webkit-scrollbar-thumb {
        background: linear-gradient(var(--color-one), var(--color-two));
        border-radius: 10px;
    }

    .cart-modal-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        border-radius: 14px;
        border: 1px solid var(--border-color);
        margin-bottom: 0.9rem;
        transition: var(--transition);
        background: #FAFAFA;
    }

    .cart-modal-item:hover {
        border-color: rgba(161, 58, 40, 0.3);
        background: rgba(161, 58, 40, 0.03);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.07);
    }

    .cart-modal-item img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 10px;
        border: 1px solid var(--border-color);
        flex-shrink: 0;
        transition: transform var(--transition);
    }

    .cart-modal-item:hover img {
        transform: scale(1.05);
    }

    .cart-modal-item-info {
        flex: 1;
        min-width: 0;
    }

    .cart-modal-item-info h6 {
        font-size: 0.92rem;
        font-weight: 600;
        margin: 0 0 0.3rem;
        color: #2c2c2c;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        line-height: 1.4;
    }

    .cart-modal-item-info .item-qty {
        font-size: 0.82rem;
        color: #888;
        margin-bottom: 0.25rem;
    }

    .cart-modal-item-info .item-price {
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--color-text-title, #A13A28);
    }

    .cart-modal-item-remove {
        background: none;
        border: none;
        color: #bbb;
        cursor: pointer;
        padding: 0.3rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: var(--transition);
        flex-shrink: 0;
        font-size: 1rem;
        width: 1.8rem;
        height: 1.8rem;
    }

    .cart-modal-item-remove:hover {
        color: #e53935;
        background: rgba(229, 57, 53, 0.1);
        transform: scale(1.15) rotate(10deg);
    }

    .cart-modal-empty {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        min-height: 260px;
        color: #aaa;
        text-align: center;
        gap: 1rem;
    }

    .cart-modal-empty i {
        font-size: 3.5rem;
        opacity: 0.4;
    }

    .cart-modal-empty p {
        font-size: 1rem;
        margin: 0;
        font-style: italic;
    }

    .cart-modal-loading {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 200px;
        gap: 0.7rem;
        color: #888;
        font-size: 0.95rem;
    }

    .cart-spinner {
        width: 22px;
        height: 22px;
        border: 3px solid rgba(161, 58, 40, 0.2);
        border-top-color: var(--color-one, #A13A28);
        border-radius: 50%;
        animation: spin 0.7s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .cart-modal-footer {
        flex-shrink: 0;
        border-top: 1px solid var(--border-color);
        padding: 1.2rem 1.6rem;
        background: #FAFAFA;
    }

    .cart-modal-subtotal {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .cart-modal-subtotal span:first-child {
        color: #666;
        font-weight: 500;
    }

    .cart-modal-subtotal span:last-child {
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--color-text-title, #A13A28);
    }

    .cart-modal-actions {
        display: flex;
        gap: 0.8rem;
    }

    .cart-modal-actions .btn {
        flex: 1;
        padding: 0.75rem 1rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.04rem;
        transition: var(--transition);
        text-align: center;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
    }

    .btn-cart-outline {
        border: 2px solid var(--color-text-title, #A13A28);
        color: var(--color-text-title, #A13A28);
        background: transparent;
    }

    .btn-cart-outline:hover {
        background: var(--color-text-title, #A13A28);
        color: #FFFFFF;
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }

    .btn-cart-primary {
        background: linear-gradient(135deg, var(--color-one, #A13A28), var(--color-two, #7A2A1C));
        color: #FFFFFF;
        border: none;
    }

    .btn-cart-primary:hover {
        filter: brightness(1.1);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(161, 58, 40, 0.35);
        color: #FFFFFF;
    }

    @media (max-width: 480px) {
        .cart-modal-panel {
            max-width: 100%;
        }
    }

    /* Accessibility */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }
</style>

<!-- Top Strip -->
<div class="top-strip py-2 px-3" role="complementary" aria-label="{{ __('navbar.top_strip') }}">
    <div class="container-fluid d-flex align-items-center justify-content-center justify-content-md-start">
        <span class="me-3 text-uppercase font-weight-bold">{{ __('navbar.authorized_distributor') }}</span>
        <img src="{{ asset('Logo_2.svg') }}" alt="{{ __('navbar.authorized_distributor_logo_alt') }}" height="32"
            loading="lazy" class="img-fluid" />
    </div>
</div>

<!-- Navbar -->
<nav class="NAVBAR navbar py-2 sticky-top" role="navigation" aria-label="{{ __('navbar.main_navigation') }}">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Left: Toggler + Nav -->
        <div class="d-flex align-items-center order-1 order-lg-1">
            <!-- Mobile Toggler -->
            <button class="navbar-toggler custom-toggler me-2" type="button" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="{{ __('navbar.toggle_navigation') }}">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>

            <!-- Nav Links -->
            <div class="navbar-collapse custom-collapse" id="navbarCollapse">
                <ul class="navbar-nav d-flex flex-column flex-lg-row align-items-lg-center">
                    @foreach ([['route' => 'front.homepage', 'label' => __('navbar.home')], ['route' => 'front.about', 'label' => __('navbar.about_us')], ['route' => 'front.product', 'label' => __('navbar.products')], ['route' => 'front.gallery', 'label' => __('navbar.gallery')], ['route' => 'front.contact', 'label' => __('navbar.contact')]] as $navItem)
                        <li class="nav-item">
                            <a href="{{ route($navItem['route']) }}"
                                class="nav-link NAVBAR-link {{ Route::is($navItem['route']) ? 'active' : '' }}"
                                aria-current="{{ Route::is($navItem['route']) ? 'page' : 'false' }}">
                                {{ $navItem['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Mobile: Socials, Locale, Avatar -->
                <div class="d-lg-none mt-3 px-3 w-100">
                    <!-- Social Icons -->
                    <div class="NAVBAR-social d-flex justify-content-center gap-3">
                        @foreach ([['href' => $globalsettings->facebook ?? '#', 'icon' => 'facebook', 'label' => __('navbar.social_facebook')], ['href' => $globalsettings->instagram ?? '#', 'icon' => 'instagram', 'label' => __('navbar.social_instagram')], ['href' => $globalsettings->youtube ?? '#', 'icon' => 'youtube', 'label' => __('navbar.social_youtube')]] as $social)
                            <a href="{{ $social['href'] }}" aria-label="{{ $social['label'] }}" class="social-link"
                                target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-{{ $social['icon'] }}"></i>
                                <span class="sr-only">{{ $social['label'] }}</span>
                            </a>
                        @endforeach
                    </div>

                    <!-- Locale Switcher (Mobile) -->
                    <div class="navbar-locale dropdown mt-3 w-100">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLocaleDropdownMobile"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            aria-label="{{ __('navbar.locale_switcher') }}" onclick="toggleLocaleDropdown(event)">
                            <i class="bi bi-globe me-1"></i>
                            <span class="selected-locale">
                                {{ session('locale', 'en') === 'en' ? 'EN' : 'AR' }} |
                                {{ session('currency', 'NIS') }}
                            </span>
                        </a>
                        <ul class="dropdown-menu w-100" aria-labelledby="navbarLocaleDropdownMobile">
                            <li class="dropdown-header">{{ __('navbar.language') }}</li>
                            @foreach (['en' => __('navbar.english'), 'ar' => __('navbar.arabic')] as $locale => $label)
                                <li>
                                    <a class="dropdown-item {{ session('locale') === $locale ? 'active' : '' }}"
                                        href="{{ route('change.language', $locale) }}">
                                        <span class="flag-icon"></span> {{ $label }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="dropdown-header mt-2">{{ __('navbar.currency') }}</li>
                            @foreach (['NIS', 'JOD', 'USD', 'EUR', 'EGP'] as $currency)
                                <li>
                                    <a class="dropdown-item {{ session('currency') === $currency ? 'active' : '' }}"
                                        href="{{ route('change.currency', $currency) }}">
                                        <span class="flag-icon"></span> {{ $currency }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Avatar (Mobile) -->
                    <div class="navbar-avatar dropdown mt-3 w-100">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center"
                            href="#" id="navbarAvatarDropdownMobile" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" aria-label="{{ __('navbar.account') }}"
                            onclick="toggleAvatarDropdown(event)">
                            @if (auth('client')->check() && auth('client')->user()->avatar)
                                <img src="{{ asset(auth('client')->user()->avatar) }}"
                                    alt="{{ auth('client')->user()->name }}" class="rounded-circle me-1" width="24"
                                    height="24" style="object-fit: cover;" loading="lazy">
                            @else
                                <i class="bi bi-person-circle me-1"></i>
                            @endif
                        </a>
                        <ul class="dropdown-menu w-100" aria-labelledby="navbarAvatarDropdownMobile">
                            @auth('client')
                                @foreach ([['route' => 'client.dashboard', 'label' => __('navbar.dashboard'), 'icon' => 'speedometer2'], ['route' => 'client.profile.edit', 'label' => __('navbar.profile'), 'icon' => 'person']] as $item)
                                    <li>
                                        <a class="dropdown-item {{ Route::is($item['route']) ? 'active' : '' }}"
                                            href="{{ route($item['route']) }}">
                                            <i class="bi bi-{{ $item['icon'] }} me-2"></i> {{ $item['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                                <li>
                                    <form action="{{ route('client.logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item w-100 text-start">
                                            <i class="bi bi-box-arrow-right me-2"></i> {{ __('navbar.logout') }}
                                        </button>
                                    </form>
                                </li>
                            @else
                                @foreach ([['route' => 'client.login', 'label' => __('navbar.login'), 'icon' => 'box-arrow-in-right'], ['route' => 'client.register', 'label' => __('navbar.register'), 'icon' => 'person-plus']] as $item)
                                    <li>
                                        <a class="dropdown-item {{ Route::is($item['route']) ? 'active' : '' }}"
                                            href="{{ route($item['route']) }}">
                                            <i class="bi bi-{{ $item['icon'] }} me-2"></i> {{ $item['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Center: Logo -->
        <a class="navbar-brand mx-auto order-2 position-relative" href="{{ route('front.homepage') }}"
            aria-label="{{ __('navbar.homepage') }}">
            <img src="{{ asset('Logo.png') }}" alt="{{ __('navbar.brand_logo') }}"
                class="img-fluid NAVBAR-logo fade-in" loading="lazy" />
        </a>

        <!-- Right: Desktop Socials, Locale, Avatar, Cart -->
        <div class="d-none d-lg-flex align-items-center order-3">
            <!-- Social Icons -->
            <div class="NAVBAR-social">
                @foreach ([['href' => $settings->facebook ?? '#', 'icon' => 'facebook', 'label' => __('navbar.social_facebook')], ['href' => $settings->instagram ?? '#', 'icon' => 'instagram', 'label' => __('navbar.social_instagram')], ['href' => $settings->youtube ?? '#', 'icon' => 'youtube', 'label' => __('navbar.social_youtube')]] as $social)
                    <a href="{{ $social['href'] }}" aria-label="{{ $social['label'] }}" class="social-link"
                        target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
                        data-bs-placement="{{ app()->getLocale() === 'ar' ? 'left' : 'right' }}"
                        title="{{ $social['label'] }}">
                        <i class="bi bi-{{ $social['icon'] }}"></i>
                        <span class="sr-only">{{ $social['label'] }}</span>
                    </a>
                @endforeach
            </div>

            <!-- Locale Switcher (Desktop) -->
            <div class="navbar-locale dropdown ms-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarLocaleDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-label="{{ __('navbar.locale_switcher') }}">
                    <i class="bi bi-globe me-1"></i>
                    <span class="selected-locale">
                        {{ session('locale', 'en') === 'en' ? 'EN' : 'AR' }} | {{ session('currency', 'NIS') }}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarLocaleDropdown">
                    <li class="dropdown-header">{{ __('navbar.language') }}</li>
                    @foreach (['en' => __('navbar.english'), 'ar' => __('navbar.arabic')] as $locale => $label)
                        <li>
                            <a class="dropdown-item {{ session('locale') === $locale ? 'active' : '' }}"
                                href="{{ route('change.language', $locale) }}">
                                <span class="flag-icon"></span> {{ $label }}
                            </a>
                        </li>
                    @endforeach
                    <li class="dropdown-header mt-2">{{ __('navbar.currency') }}</li>
                    @foreach (['NIS', 'JOD', 'USD', 'EUR', 'EGP'] as $currency)
                        <li>
                            <a class="dropdown-item {{ session('currency') === $currency ? 'active' : '' }}"
                                href="{{ route('change.currency', $currency) }}">
                                <span class="flag-icon"></span> {{ $currency }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Avatar (Desktop) -->
            <div class="navbar-avatar dropdown ms-2">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                    id="navbarAvatarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    aria-label="{{ __('navbar.account') }}"
                    title="{{ auth('client')->check() ? auth('client')->user()->name : __('navbar.account') }}">
                    @if (auth('client')->check() && auth('client')->user()->avatar)
                        <img src="{{ asset(auth('client')->user()->avatar) }}"
                            alt="{{ auth('client')->user()->name }}" class="rounded-circle" width="32"
                            height="32" style="object-fit: cover;" loading="lazy">
                    @else
                        <i class="bi bi-person-circle fs-4"></i>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarAvatarDropdown">
                    @auth('client')
                        @foreach ([['route' => 'client.dashboard', 'label' => __('navbar.dashboard'), 'icon' => 'speedometer2'], ['route' => 'client.profile.edit', 'label' => __('navbar.profile'), 'icon' => 'person']] as $item)
                            <li>
                                <a class="dropdown-item {{ Route::is($item['route']) ? 'active' : '' }}"
                                    href="{{ route($item['route']) }}">
                                    <i class="bi bi-{{ $item['icon'] }} me-2"></i> {{ $item['label'] }}
                                </a>
                            </li>
                        @endforeach
                        <li>
                            <form action="{{ route('client.logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item w-100 text-start">
                                    <i class="bi bi-box-arrow-right me-2"></i> {{ __('navbar.logout') }}
                                </button>
                            </form>
                        </li>
                    @else
                        @foreach ([['route' => 'client.login', 'label' => __('navbar.login'), 'icon' => 'box-arrow-in-right'], ['route' => 'client.register', 'label' => __('navbar.register'), 'icon' => 'person-plus']] as $item)
                            <li>
                                <a class="dropdown-item {{ Route::is($item['route']) ? 'active' : '' }}"
                                    href="{{ route($item['route']) }}">
                                    <i class="bi bi-{{ $item['icon'] }} me-2"></i> {{ $item['label'] }}
                                </a>
                            </li>
                        @endforeach
                    @endauth
                </ul>
            </div>

            <!-- Cart Button (Desktop) -->
            <div class="nav-cart position-relative ms-3" id="navCartDesktop" onclick="openCartModal()"
                role="button" aria-label="{{ __('navbar.open_cart') }}" tabindex="0">
                <i class="bi bi-cart"></i>
                @if (isset($cartItemCount) && $cartItemCount > 0)
                    <span class="cart-badge">{{ $cartItemCount }}</span>
                @endif
            </div>
        </div>

        <!-- Cart Button (Mobile - always visible in navbar) -->
        <div class="nav-cart position-relative d-lg-none ms-2" id="navCartMobile" onclick="openCartModal()"
            role="button" aria-label="{{ __('navbar.open_cart') }}" tabindex="0">
            <i class="bi bi-cart"></i>
            @if (isset($cartItemCount) && $cartItemCount > 0)
                <span class="cart-badge">{{ $cartItemCount }}</span>
            @endif
        </div>
    </div>
</nav>

<!-- ===================== CART MODAL ===================== -->
<div class="cart-modal-overlay" id="cartModalOverlay" aria-hidden="true" onclick="closeCartModal()"></div>

<div class="cart-modal-panel" id="cartModalPanel" role="dialog" aria-modal="true"
    aria-label="{{ __('navbar.your_cart') }}">

    <!-- Header -->
    <div class="cart-modal-header">
        <h5>
            <i class="bi bi-cart3"></i>
            {{ __('navbar.your_cart') }}
        </h5>
        <button class="cart-modal-close" onclick="closeCartModal()" aria-label="{{ __('navbar.close_cart') }}">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <!-- Body -->
    <div class="cart-modal-body" id="cartModalBody">
        <div class="cart-modal-loading" id="cartModalLoading">
            <div class="cart-spinner"></div>
            <span>{{ __('navbar.loading_cart') }}</span>
        </div>
    </div>

    <!-- Footer -->
    <div class="cart-modal-footer" id="cartModalFooter" style="display: none;">
        <div class="cart-modal-subtotal">
            <span>{{ __('navbar.subtotal') }}</span>
            <span id="cartModalSubtotal">—</span>
        </div>
        <div class="cart-modal-actions">
            <a href="{{ route('cart.index') }}" class="btn btn-cart-outline">
                <i class="bi bi-bag"></i> {{ __('navbar.view_cart') }}
            </a>
            <a href="{{ route('checkout.index') }}" class="btn btn-cart-primary">
                <i class="bi bi-credit-card"></i> {{ __('navbar.checkout') }}
            </a>
        </div>
    </div>
</div>
<!-- ==================== END CART MODAL ==================== -->

<!-- Custom JS -->
<script>
    document.addEventListener('DOMContentLoaded', () => {

        /* ── Cached selectors ── */
        const sel = {
            toggler: document.querySelector('.custom-toggler'),
            collapse: document.querySelector('.custom-collapse'),
            body: document.body,
            navbar: document.querySelector('.NAVBAR'),
            desktopAvatarWrapper: document.querySelector('.d-none.d-lg-flex .navbar-avatar'),
            mobileAvatarWrapper: document.querySelector('.d-lg-none .navbar-avatar'),
            desktopLocaleWrapper: document.querySelector('.d-none.d-lg-flex .navbar-locale'),
            mobileLocaleWrapper: document.querySelector('.d-lg-none .navbar-locale'),
            tooltipElements: document.querySelectorAll('[data-bs-toggle="tooltip"]'),
            navLinks: document.querySelector('.navbar-nav'),
        };

        /* ── State ── */
        let state = {
            isToggling: false,
            isAvatarToggling: false,
            isLocaleToggling: false
        };

        /* ── Debounce ── */
        const debounce = (fn, wait) => {
            let t;
            return (...a) => {
                clearTimeout(t);
                t = setTimeout(() => fn(...a), wait);
            };
        };

        /* ── Mobile menu ── */
        const toggleMobileMenu = (e) => {
            e.stopPropagation();
            if (state.isToggling) return;
            state.isToggling = true;
            sel.toggler.classList.toggle('open');
            sel.collapse.classList.toggle('show');
            sel.body.classList.toggle('menu-open');
            closeAllDropdowns();
            setTimeout(() => {
                state.isToggling = false;
            }, 400);
        };

        /* ── Close dropdowns (avatar / locale only) ── */
        const closeAllDropdowns = () => {
            document.querySelectorAll('.navbar-avatar .dropdown-menu').forEach(m => m.classList.remove(
                'show'));
            document.querySelectorAll('.navbar-locale .dropdown-menu').forEach(m => m.classList.remove(
                'show'));
        };

        /* ── Outside click ── */
        const handleOutsideClick = debounce((e) => {
            if (!sel.toggler.contains(e.target) &&
                !sel.collapse.contains(e.target) &&
                !e.target.closest('.NAVBAR-link') &&
                !e.target.closest('.navbar-locale') &&
                !e.target.closest('.navbar-avatar') &&
                !e.target.closest('#cartModalPanel')) {
                sel.toggler.classList.remove('open');
                sel.collapse.classList.remove('show');
                sel.body.classList.remove('menu-open');
                closeAllDropdowns();
            }
        }, 100);

        /* ── Prevent nav-link click closing menu ── */
        const handleNavLinkClick = (e) => {
            if (e.target.closest('.NAVBAR-link')) e.stopPropagation();
        };

        /* ── Sticky shadow ── */
        const handleScroll = debounce(() => {
            sel.navbar?.classList.toggle('sticky-shadow', window.scrollY > 10);
        }, 50);

        /* ── Logo fade-in ── */
        const initLogoFadeIn = () => {
            document.querySelectorAll('.NAVBAR-logo').forEach(l => l.classList.add('fade-in'));
        };

        /* ── Tooltips ── */
        const initTooltips = () => {
            sel.tooltipElements.forEach(el => new bootstrap.Tooltip(el, {
                trigger: 'hover focus',
                placement: document.documentElement.dir === 'rtl' ? 'left' : 'right',
            }));
        };

        /* ── Cart badge ── */
        const animateCartBadge = () => {
            document.querySelectorAll('.cart-badge').forEach(b => {
                b.classList.remove('bounceIn');
                void b.offsetWidth;
                b.classList.add('bounceIn');
            });
        };

        const updateCartBadges = (count) => {
            const badges = document.querySelectorAll('.cart-badge');
            const prev = parseInt(badges[0]?.textContent || '0');
            badges.forEach(b => {
                if (count > 0) {
                    b.textContent = count;
                    b.style.display = 'block';
                    if (count !== prev) animateCartBadge();
                } else b.style.display = 'none';
            });
        };

        /* ══════════════════════════════════════════
            CART MODAL LOGIC
        ══════════════════════════════════════════ */
        const overlay = document.getElementById('cartModalOverlay');
        const panel = document.getElementById('cartModalPanel');
        const body = document.getElementById('cartModalBody');
        const footer = document.getElementById('cartModalFooter');
        const subtotalEl = document.getElementById('cartModalSubtotal');
        let cartLoaded = false;

        window.openCartModal = () => {
            overlay.classList.add('active');
            panel.classList.add('active');
            document.body.style.overflow = 'hidden';
            panel.setAttribute('aria-hidden', 'false');

            /* Close mobile menu if open */
            sel.toggler.classList.remove('open');
            sel.collapse.classList.remove('show');
            sel.body.classList.remove('menu-open');

             loadCartModal();
        };

        window.closeCartModal = () => {
            overlay.classList.remove('active');
            panel.classList.remove('active');
            document.body.style.overflow = '';
            panel.setAttribute('aria-hidden', 'true');
        };

        const loadCartModal = async (retries = 2) => {
            body.innerHTML = `
            <div class="cart-modal-loading">
                <div class="cart-spinner"></div>
                <span>{{ __('navbar.loading_cart') }}</span>
            </div>`;
            footer.style.display = 'none';

            try {
                const res = await fetch('{{ route('cart.mini') }}', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                if (!res.ok && retries > 0) {
                    setTimeout(() => loadCartModal(retries - 1), 1000);
                    return;
                }

                const data = await res.json();
                body.innerHTML = '';

                if (!data.items?.length) {
                    body.innerHTML = `
                    <div class="cart-modal-empty">
                        <i class="bi bi-cart-x"></i>
                        <p>{{ __('navbar.cart_empty') }}</p>
                    </div>`;
                    footer.style.display = 'none';
                } else {
                    data.items.forEach(item => {
                        const el = document.createElement('div');
                        el.className = 'cart-modal-item';
                        el.innerHTML = `
                        <img src="${item.image}" alt="${item.name}" loading="lazy">
                        <div class="cart-modal-item-info">
                            <h6>${item.name}</h6>
                            <div class="item-qty">{{ __('Qty') }}: ${item.qty}</div>
                            <div class="item-price">${item.line_total_formatted}</div>
                        </div>
                        <button class="cart-modal-item-remove" aria-label="{{ __('navbar.remove_item') }}"
                                data-item-id="${item.id}">
                            <i class="bi bi-trash3"></i>
                        </button>`;
                        body.appendChild(el);
                    });

                    subtotalEl.textContent = data.subtotal;
                    footer.style.display = 'block';
                }

                updateCartBadges(data.item_count);
                cartLoaded = true;

            } catch (err) {
                console.error('Cart modal error:', err);
                body.innerHTML =
                    `<p class="text-danger text-center mt-4">{{ __('navbar.error_loading_cart') }}</p>`;
            }
        };

        /* Remove item */
        body.addEventListener('click', async (e) => {
            const btn = e.target.closest('.cart-modal-item-remove');
            if (!btn) return;

            const itemId = btn.dataset.itemId;
            btn.disabled = true;
            btn.innerHTML =
                '<div class="cart-spinner" style="width:16px;height:16px;border-width:2px;"></div>';

            try {
                const res = await fetch(`{{ url('/cart/remove') }}/${itemId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        _method: 'DELETE'
                    }),
                });

                const data = await res.json();
                btn.closest('.cart-modal-item')?.remove();

                /* Reload to refresh subtotal */
                cartLoaded = false;
                loadCartModal();
                updateCartBadges(data.cart_count);

            } catch (err) {
                console.error('Remove cart error:', err);
                btn.disabled = false;
                btn.innerHTML = '<i class="bi bi-trash3"></i>';
            }
        });

        /* Keyboard: Escape closes modal */
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeCartModal();
                sel.toggler.classList.remove('open');
                sel.collapse.classList.remove('show');
                sel.body.classList.remove('menu-open');
                closeAllDropdowns();
            }
            if (e.key === 'Enter' && e.target.closest('.nav-cart')) openCartModal();
            if (e.key === 'Enter' && e.target.closest('.navbar-avatar .nav-link')) toggleAvatarDropdown(
                e);
            if (e.key === 'Enter' && e.target.closest('.navbar-locale .nav-link')) toggleLocaleDropdown(
                e);
        });

        /* ── Desktop hover: avatar ── */
        const initDesktopAvatarHover = () => {
            if (!sel.desktopAvatarWrapper) return;
            let t;
            sel.desktopAvatarWrapper.addEventListener('mouseenter', () => {
                t = setTimeout(() => sel.desktopAvatarWrapper.querySelector('.dropdown-menu')
                    .classList.add('show'), 200);
            });
            sel.desktopAvatarWrapper.addEventListener('mouseleave', () => {
                clearTimeout(t);
                sel.desktopAvatarWrapper.querySelector('.dropdown-menu').classList.remove('show');
            });
        };

        /* ── Desktop hover: locale ── */
        const initDesktopLocaleHover = () => {
            if (!sel.desktopLocaleWrapper) return;
            let t;
            sel.desktopLocaleWrapper.addEventListener('mouseenter', () => {
                t = setTimeout(() => sel.desktopLocaleWrapper.querySelector('.dropdown-menu')
                    .classList.add('show'), 200);
            });
            sel.desktopLocaleWrapper.addEventListener('mouseleave', () => {
                clearTimeout(t);
                sel.desktopLocaleWrapper.querySelector('.dropdown-menu').classList.remove('show');
            });
        };

        /* ── Mobile: avatar toggle ── */
        window.toggleAvatarDropdown = (e) => {
            e.preventDefault();
            e.stopPropagation();
            if (state.isAvatarToggling) return;
            state.isAvatarToggling = true;
            // Close locale first
            document.querySelectorAll('.navbar-locale .dropdown-menu').forEach(m => m.classList.remove(
                'show'));
            sel.mobileAvatarWrapper?.querySelector('.dropdown-menu')?.classList.toggle('show');
            setTimeout(() => {
                state.isAvatarToggling = false;
            }, 400);
        };

        /* ── Mobile: locale toggle ── */
        window.toggleLocaleDropdown = (e) => {
            e.preventDefault();
            e.stopPropagation();
            if (state.isLocaleToggling) return;
            state.isLocaleToggling = true;
            // Close avatar first
            document.querySelectorAll('.navbar-avatar .dropdown-menu').forEach(m => m.classList.remove(
                'show'));
            sel.mobileLocaleWrapper?.querySelector('.dropdown-menu')?.classList.toggle('show');
            setTimeout(() => {
                state.isLocaleToggling = false;
            }, 400);
        };

        /* ── Init ── */
        sel.toggler?.addEventListener('click', toggleMobileMenu);
        document.addEventListener('click', handleOutsideClick);
        sel.navLinks?.addEventListener('click', handleNavLinkClick);
        window.addEventListener('scroll', handleScroll);
        initLogoFadeIn();
        initTooltips();
        initDesktopAvatarHover();
        initDesktopLocaleHover();

        @if (isset($cartItemCount))
            updateCartBadges({{ $cartItemCount }});
        @endif
    });
</script>
