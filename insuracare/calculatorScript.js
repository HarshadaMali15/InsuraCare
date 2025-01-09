// Toggle input fields based on selected calculation mode
document.getElementsByName('calcMode').forEach(radio => {
    radio.addEventListener('change', (event) => {
        if (event.target.value === 'sumAssured') {
            document.getElementById('sumAssuredInput').style.display = 'block';
            document.getElementById('premiumInput').style.display = 'none';
        } else {
            document.getElementById('sumAssuredInput').style.display = 'none';
            document.getElementById('premiumInput').style.display = 'block';
        }
    });
});

// Calculate and display the premium details
function calculatePremium() {
    const name = document.getElementById('name').value;
    const age = document.getElementById('age').value;
    const sumAssured = parseFloat(document.getElementById('sumAssured').value || 0);
    const premium = parseFloat(document.getElementById('premium').value || 0);
    const term = parseInt(document.getElementById('term').value || 0);
    const bonus = parseFloat(document.getElementById('bonus').value || 0);
    const paymentMode = document.getElementById('paymentMode').value;

    const adDb = document.getElementById('adDb').checked ? 'Yes' : 'No';
    const ageExtra = document.getElementById('ageExtra').checked ? 'Yes' : 'No';
    const termRider = document.getElementById('termRider').checked ? 'Yes' : 'No';
    const maturity = document.getElementById('maturity').value;
`   `
    // Basic Calculation Logic
    let totalPremium = 0;
    if (sumAssured) {
        const baseRate = 0.02; // Example: 2% of Sum Assured per year
        totalPremium = sumAssured * baseRate * term + bonus;
    } else if (premium) {
        totalPremium = premium * term + bonus;
    }

    // Adjust based on payment mode
    const modeFactors = {
        yearly: 1,
        halfYearly: 0.52,
        quarterly: 0.27,
        monthly: 0.09,
    };
    const adjustedPremium = totalPremium * modeFactors[paymentMode];

    // Display the result
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <h2>Calculation Summary</h2>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Age:</strong> ${age}</p>
        <p><strong>Sum Assured:</strong> ₹${sumAssured || 'Not Provided'}</p>
        <p><strong>Premium:</strong> ₹${premium || 'Not Provided'}</p>
        <p><strong>Policy Term:</strong> ${term} years</p>
        <p><strong>Bonus:</strong> ₹${bonus}</p>
        <p><strong>Payment Mode:</strong> ${paymentMode.charAt(0).toUpperCase() + paymentMode.slice(1)}</p>
        <p><strong>AD and DB:</strong> ${adDb}</p>
        <p><strong>Age Extra:</strong> ${ageExtra}</p>
        <p><strong>Term Rider:</strong> ${termRider}</p>
        <p><strong>Maturity Settlement:</strong> ${maturity}</p>
        <hr>
        <h3>Total Premium (Adjusted): ₹${adjustedPremium.toFixed(2)}</h3>
    `;
}
