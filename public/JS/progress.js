 // PROGRESS BAR
    // Initialize the start and end percentages, as well as the speed of the counter
    let start = 75;
    let end = 99.9;
    let interval = 20; // Speed of the counter in milliseconds

    function countUp() {
        let counterElement = document.getElementById('counter');
        let progressCircle = document.getElementById('progressCircle');
        let current = start;

        // Function to update the counter and circle fill
        function updateCounter() {
            if (current < end) {
                current += 0.1; // Increment by 0.1%
                counterElement.innerText = current.toFixed(1) + '%';

                // Calculate the fill percentage for the progress circle
                let percentage = ((current - start) / (end - start)) * 100;
                progressCircle.style.background = `conic-gradient(#28a745 ${percentage}%, #ddd ${percentage}%)`;

                // Repeat with the set interval
                setTimeout(updateCounter, interval);
            } else {
                // Final update to ensure it ends at 99.9%
                counterElement.innerText = end + '%';
                progressCircle.style.background = `conic-gradient(#28a745 100%, #ddd 0%)`;
            }
        }

        // Start the counter update
        updateCounter();
    }

    // Set up IntersectionObserver to trigger counting when element is in view
    document.addEventListener('DOMContentLoaded', function () {
        let progressCircle = document.getElementById('progressCircle');
        
        let observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp();
                    observer.unobserve(progressCircle); // Stop observing once counted
                }
            });
        }, { threshold: 0.5 }); // Adjust threshold as needed (0.5 means half the element should be visible)

        observer.observe(progressCircle);
    });
// END OF PROGRESS BAR