/**
 * Royal Bank (RBC Style) Interactive Front-End Engine
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Mobile Menu Navigation Toggle
    const mobileToggle = document.getElementById('rbcMobileToggle');
    const subnavList = document.getElementById('rbcSubnavList');

    if (mobileToggle && subnavList) {
        mobileToggle.addEventListener('click', function() {
            subnavList.classList.toggle('mobile-active');
            const icon = mobileToggle.querySelector('i');
            if (icon) {
                if (subnavList.classList.contains('mobile-active')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            }
        });
    }

    // 2. Mobile Dropdown Accordion Toggle
    const subnavItems = document.querySelectorAll('.rbc-subnav-item');
    subnavItems.forEach(item => {
        const link = item.querySelector('.rbc-subnav-link');
        const dropdown = item.querySelector('.rbc-dropdown');
        if (dropdown && link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    item.classList.toggle('open');
                }
            });
        }
    });

    // 3. Category Accordion in "How can we help you today?"
    const accordions = document.querySelectorAll('.rbc-category-accordion');
    accordions.forEach(acc => {
        const trigger = acc.querySelector('.rbc-accordion-trigger');
        if (trigger) {
            trigger.addEventListener('click', () => {
                const isActive = acc.classList.contains('active');
                // Close others in same group if desired
                acc.classList.toggle('active');
                const icon = trigger.querySelector('i');
                if (icon) {
                    if (!isActive) {
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        icon.style.transform = 'rotate(0deg)';
                    }
                }
            });
        }
    });

    // 4. Mortgage Payment Calculator
    const homePriceInput = document.getElementById('mortgageHomePrice');
    const downPaymentInput = document.getElementById('mortgageDownPayment');
    const rateInput = document.getElementById('mortgageRate');
    const termSelect = document.getElementById('mortgageTerm');
    const monthlyPaymentDisplay = document.getElementById('mortgageMonthlyPayment');
    const totalInterestDisplay = document.getElementById('mortgageTotalInterest');

    function calculateMortgage() {
        if (!homePriceInput || !monthlyPaymentDisplay) return;

        const homePrice = parseFloat(homePriceInput.value) || 0;
        const downPayment = parseFloat(downPaymentInput ? downPaymentInput.value : 0) || 0;
        const interestRate = (parseFloat(rateInput ? rateInput.value : 4.89) || 4.89) / 100 / 12;
        const years = parseInt(termSelect ? termSelect.value : 25) || 25;
        const numberOfPayments = years * 12;

        const principal = Math.max(0, homePrice - downPayment);

        if (principal <= 0 || interestRate <= 0) {
            monthlyPaymentDisplay.innerText = '$0';
            if (totalInterestDisplay) totalInterestDisplay.innerText = '$0';
            return;
        }

        const monthlyPayment = (principal * interestRate * Math.pow(1 + interestRate, numberOfPayments)) /
                               (Math.pow(1 + interestRate, numberOfPayments) - 1);

        const totalPaid = monthlyPayment * numberOfPayments;
        const totalInterest = totalPaid - principal;

        monthlyPaymentDisplay.innerText = '$' + Math.round(monthlyPayment).toLocaleString();
        if (totalInterestDisplay) {
            totalInterestDisplay.innerText = '$' + Math.round(totalInterest).toLocaleString();
        }
    }

    if (homePriceInput) {
        homePriceInput.addEventListener('input', calculateMortgage);
        if (downPaymentInput) downPaymentInput.addEventListener('input', calculateMortgage);
        if (rateInput) rateInput.addEventListener('input', calculateMortgage);
        if (termSelect) termSelect.addEventListener('change', calculateMortgage);
        calculateMortgage();
    }

    // 5. Loan Payoff Calculator
    const loanAmountInput = document.getElementById('calcLoanAmount');
    const loanRateInput = document.getElementById('calcLoanRate');
    const loanTermInput = document.getElementById('calcLoanTerm');
    const loanResultDisplay = document.getElementById('calcLoanResult');

    function calculateLoan() {
        if (!loanAmountInput || !loanResultDisplay) return;
        const amount = parseFloat(loanAmountInput.value) || 0;
        const rate = (parseFloat(loanRateInput ? loanRateInput.value : 6.5) || 6.5) / 100 / 12;
        const months = parseInt(loanTermInput ? loanTermInput.value : 36) || 36;

        if (amount <= 0 || rate <= 0) {
            loanResultDisplay.innerText = '$0';
            return;
        }

        const monthly = (amount * rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
        loanResultDisplay.innerText = '$' + Math.round(monthly).toLocaleString();
    }

    if (loanAmountInput) {
        loanAmountInput.addEventListener('input', calculateLoan);
        if (loanRateInput) loanRateInput.addEventListener('input', calculateLoan);
        if (loanTermInput) loanTermInput.addEventListener('change', calculateLoan);
        calculateLoan();
    }

    // 6. Currency Converter
    const fxAmount = document.getElementById('fxAmount');
    const fxFrom = document.getElementById('fxFrom');
    const fxTo = document.getElementById('fxTo');
    const fxResult = document.getElementById('fxResult');

    const exchangeRates = {
        'USD': 1.0,
        'CAD': 1.36,
        'EUR': 0.92,
        'GBP': 0.79,
        'AUD': 1.52,
        'JPY': 155.2,
        'CHF': 0.90
    };

    function convertCurrency() {
        if (!fxAmount || !fxResult || !fxFrom || !fxTo) return;
        const amount = parseFloat(fxAmount.value) || 0;
        const fromCurrency = fxFrom.value;
        const toCurrency = fxTo.value;

        const rateFromUSD = exchangeRates[fromCurrency] || 1.0;
        const rateToUSD = exchangeRates[toCurrency] || 1.0;

        // amount in USD
        const amountInUSD = amount / rateFromUSD;
        const finalAmount = amountInUSD * rateToUSD;

        fxResult.innerText = finalAmount.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' ' + toCurrency;
    }

    if (fxAmount && fxFrom && fxTo) {
        fxAmount.addEventListener('input', convertCurrency);
        fxFrom.addEventListener('change', convertCurrency);
        fxTo.addEventListener('change', convertCurrency);
        convertCurrency();
    }

    // 7. Tab Switchers
    const tabBtns = document.querySelectorAll('.rbc-tab-btn');
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabGroup = btn.getAttribute('data-tab-group');
            const targetTab = btn.getAttribute('data-tab-target');

            document.querySelectorAll(`.rbc-tab-btn[data-tab-group="${tabGroup}"]`).forEach(b => b.classList.remove('active'));
            document.querySelectorAll(`.rbc-tab-content[data-tab-group="${tabGroup}"]`).forEach(c => c.style.display = 'none');

            btn.classList.add('active');
            const activeContent = document.getElementById(targetTab);
            if (activeContent) activeContent.style.display = 'block';
        });
    });
});
