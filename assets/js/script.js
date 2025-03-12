// Optional JavaScript for interactivity
// Example: Add interactivity to team and player cards
document.addEventListener("DOMContentLoaded", function () {
    const teamCards = document.querySelectorAll(".team-card");
    const playerCards = document.querySelectorAll(".player-card");

    teamCards.forEach(card => {
        card.addEventListener("click", () => {
            alert(`You clicked on ${card.querySelector("h3").textContent}`);
        });
    });

    playerCards.forEach(card => {
        card.addEventListener("click", () => {
            alert(`You clicked on ${card.querySelector("h3").textContent}`);
        });
    });
});