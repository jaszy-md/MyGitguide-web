// popup
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(startImageAnimation, 500);
});

function startImageAnimation() {

    var popup = document.querySelector('#popupContainer .popup');

    if (!popup) {
        console.error("Popup afbeelding niet gevonden!");
        return;
    }

    popup.classList.add("animate-popup");
}

// blocked zooming
document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && (event.key === '=' || event.key === '-' || event.key === '0')) {
        event.preventDefault();
    }
});

document.addEventListener('wheel', function(event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }
}, { passive: false });

// typing animation 

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }

    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #000}";
    document.body.appendChild(css);
};

// Smooth opening en closing of nav menu
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-menu a");
    const navTextLinks = document.querySelectorAll(".nav-menu a span");

    function setActiveIcon() {
        const currentPage = window.location.pathname.split("/").pop();
        navLinks.forEach(link => {
            const icon = link.querySelector("i");
            const linkHref = link.getAttribute("href");

            if (icon) {
                if (linkHref === currentPage) {
                    link.classList.add("active-link");
                } else {
                    link.classList.remove("active-link");
                }
            }
        });
    }

    navLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            
            navLinks.forEach(otherLink => {
                if (otherLink !== this) {
                    otherLink.classList.remove("open");
                }
            });

            this.classList.toggle("open");
        });
    });

    // Sends to page after open
    navTextLinks.forEach(span => {
        span.addEventListener("click", function (event) {
            event.stopPropagation();

            const url = this.getAttribute("data-href");
            const parentLink = this.closest("a");

            if (parentLink.classList.contains("open") && url) {
                window.location.href = url;
            }
        });
    });

    setActiveIcon();
});

// Cardflip
function flipCard(cardElement) {
    const flippedCards = document.querySelectorAll('.block.flipped');

    flippedCards.forEach(card => {
        if (card !== cardElement) {
            card.classList.remove('flipped');
        }
    });

    cardElement.classList.toggle('flipped');
}

document.addEventListener("DOMContentLoaded", function () {
    let modal = document.getElementById("popupModal");

    if (modal) {
        modal.style.display = "none"; 
    }

    document.getElementById("appointment-form").addEventListener("submit", function (event) {
        event.preventDefault();

        if (modal) {
            modal.style.display = "flex";
        }

        this.reset();
    });

    document.getElementById("closePopup").addEventListener("click", function () {
        if (modal) {
            modal.style.display = "none";
        }
    });

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
