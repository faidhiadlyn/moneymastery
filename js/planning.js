document.getElementById('progress').addEventListener('submit', function(event) {
  event.preventDefault();
  const savings = parseFloat(document.getElementById('update').value);
  const totalValue = parseFloat(document.getElementById('totalValue').textContent);

  if (isNaN(savings) || isNaN(totalValue)) {
    alert('Please enter a valid savings value.');
    return;
  }

  const progress = 100 - ((totalValue - savings) / totalValue) * 100;
  const progression = document.getElementById('xp');
  progression.textContent = `Your progress is ${progress.toFixed(2)}%`;

  document.getElementById('file').value = progress;
});

function calculateBudget() {
  const income = parseFloat(document.getElementById('income').value);
  const selectedPlan = document.querySelector('input[name="plans"]:checked');

  if (isNaN(income) || !selectedPlan) {
    alert('Please enter a valid income and select a plan.');
    return;
  }

  const planDetails = selectedPlan.nextElementSibling.querySelector('p').innerText;
  const budgetAllocation = calculateBudgetValues(income, planDetails);
  displayBudgetAllocation(budgetAllocation);
}

function calculateBudgetValues(income, plan) {
  const [needs, wants, savings] = plan.split('-').map(Number);

  const needsAmount = income * (needs / 100);
  const wantsAmount = income * (wants / 100);
  const savingsAmount = income * (savings / 100);

  return { needs: needsAmount, wants: wantsAmount, savings: savingsAmount };
}

function displayBudgetAllocation(budgetAllocation) {
  const plannedElement = document.getElementById('planned');
  plannedElement.innerHTML =
    `<p>Budget Allocation:</p><br>
    <p>Needs: RM ${budgetAllocation.needs.toFixed(2)}</p>
    <p>Wants: RM ${budgetAllocation.wants.toFixed(2)}</p>
    <p>Savings: RM ${budgetAllocation.savings.toFixed(2)}</p>`;
}


document.getElementById('goal').addEventListener('submit', function(event) {
  event.preventDefault(); 
  const items = document.querySelectorAll('.item');
  let total = 0;
  items.forEach(function(item) {
    if (!isNaN(parseFloat(item.value))) { 
      total += parseFloat(item.value);
    }
  });
  document.getElementById('totalValue').textContent = total;
});

// Form validation for email input
const emailInput = document.getElementById('email');
emailInput.addEventListener('input', function(event) {
  const emailValue = event.target.value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailValue)) {
    alert('Please enter a valid email address.');
    event.target.value = ''; 
  }
});

document.getElementById('personalDetails').addEventListener('submit', function(event) {
  event.preventDefault();
  const email = document.getElementById('email').value;

  console.log('Email submitted:', email);
});