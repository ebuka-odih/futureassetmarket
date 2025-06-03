@extends('pages.layout.app2')
@section('content')

    <main>
        <div class="uk-section in-liquid-13">
            <div class="uk-container">
                <h4 style="text-align: center">Terms and Conditions</h4>


                <div class="container large-top hero-bottom">
                    <h4 style="font-weight: bolder">1. Introduction</h4>
                    <p>
                        Welcome to {{ env('APP_NAME') }}.com (“Platform”). By accessing or using our services, you agree to
                        abide by these Terms and Conditions. If you do not agree, you must discontinue using the
                        platform immediately.

                    </p>
                    <h4 style="font-weight: bolder">2. Regulatory Compliance</h4>
                    <p>
                        {{ env('APP_NAME') }} operates as a fully regulated brokerage platform under the oversight of the
                        Securities and Exchange Commission (SEC) and the Financial Industry Regulatory Authority
                        (FINRA).
                        <br>
                        The platform complies with all applicable U.S. federal and state financial laws to ensure
                        transparency, security, and investor protection.
                        Users must comply with all applicable financial regulations when using {{ env('APP_NAME') }}’s
                        services.

                    </p>

                    <h4 style="font-weight: bolder">3. Eligibility</h4>
                    <p>
                        You must be at least 18 years old and legally authorized to invest in financial markets.
                        You agree to provide accurate and complete information during registration.
                        <br>
                        {{ env('APP_NAME') }} reserves the right to refuse service or close accounts at its discretion.
                    </p>

                    <h4 style="font-weight: bolder">4. Account Registration & Security</h4>
                    <p>
                        Users must register an account to access trading and investment services.
                        It is the user's responsibility to maintain the security of their account credentials.
                        <br>
                        Any unauthorized use of your account must be reported immediately to {{ env('APP_NAME') }}’s support
                        team.

                    </p>


                    <h4 style="font-weight: bolder">5. Trading, Execution & Principal Protection</h4>
                    <p>
                        {{ env('APP_NAME') }} provides access to stocks, ETFs, and other investment instruments.
                        <br>
                        The platform executes trades based on user instructions and market conditions.
                        <br>
                        Principal Safeguard Mechanism:
                        {{ env('APP_NAME') }} has the ability to execute trades on behalf of users when necessary to protect
                        and safeguard their principal from significant market downturns or volatility.
                        <br>
                        Certain investment products or strategies may require additional user agreements.

                    </p>


                    <h4 style="font-weight: bolder">6. Fees & Pricing</h4>
                    <p>
                        Zero Commission Trading: {{ env('APP_NAME') }} offers commission-free trading on stocks and ETFs.
                        <br>

                        No Hidden Fees: No account maintenance, inactivity, or deposit fees.
                        <br>
                        Withdrawal & Deposit Fees: {{ env('APP_NAME') }} does not charge fees for standard deposits or
                        withdrawals, though third-party banks or payment providers may impose charges.
                        <br>
                        {{ env('APP_NAME') }} reserves the right to introduce fees with prior notice to users.

                    </p>

                    <h4 style="font-weight: bolder">7. Tax Handling & Clearance Services</h4>
                    <p>
                        {{ env('APP_NAME') }} has the ability to handle all tax-related matters on behalf of users for
                        transactions conducted through the platform.
                        <br>
                        The platform may generate and file required IRS forms (such as 1099-B, 1099-DIV, or other tax
                        documents) on behalf of users.
                        <br>
                        {{ env('APP_NAME') }} has the ability to clear off taxes on behalf of users to ensure compliance and
                        simplify tax obligations.
                        <br>
                        Users will receive detailed tax reports summarizing their gains, losses, and any applicable tax
                        liabilities.
                        <br>
                        While {{ env('APP_NAME') }} facilitates tax compliance, users are responsible for reviewing their tax
                        obligations and consulting a tax professional if necessary.
                    </p>

                    <h4 style="font-weight: bolder">8. Risk Disclosure</h4>
                    <p>
                        All investments involve risk, including potential loss of principal.
                        <br>

                        Past performance does not guarantee future returns, but we can ensure that our users' principal
                        remains protected.
                        <br>
                    </p>

                    <h4 style="font-weight: bolder">9. Withdrawals & Deposits</h4>

                    <p>
                        Users can deposit and withdraw funds via approved banking methods.
                        <br>
                        Withdrawals are typically processed within 1-3 business days.
                        <br>
                        {{ env('APP_NAME') }} may review withdrawals for security and compliance reasons.
                    </p>

                    <h4 style="font-weight: bolder">10. Compliance & Regulations</h4>
                    <p>
                        {{ env('APP_NAME') }} is a fully regulated brokerage platform under SEC and FINRA oversight.
                        <br>

                        Users may be required to complete identity verification (KYC) and anti-money laundering (AML)
                        checks as part of regulatory compliance.
                    </p>

                    <h4 style="font-weight: bolder">11. Account Suspension & Termination</h4>
                    <p>
                        {{ env('APP_NAME') }} reserves the right to suspend, restrict, or terminate accounts for violations of
                        these Terms.
                        <br>

                        Users engaging in fraudulent activities, market manipulation, or regulatory violations may have
                        their accounts permanently closed.

                    </p>

                    <h4 style="font-weight: bolder">12. Security & Data Protection</h4>
                    <p>
                        {{ env('APP_NAME') }} employs multi-factor authentication (MFA), encryption, and secure login protocols
                        to protect user accounts.
                        <br>
                        Personal data is handled per {{ env('APP_NAME') }}’s Privacy Policy and will not be shared without user
                        consent.

                    </p>
                    <h4 style="font-weight: bolder">13. Limitation of Liability</h4>
                    <p>
                        {{ env('APP_NAME') }} is not liable for losses due to market fluctuations.
                        <br>
                        Users acknowledge that trading and investing involve inherent risks, and they assume full
                        responsibility for their investment decisions.

                    </p>
                    <h4 style="font-weight: bolder">14. Amendments to Terms</h4>
                    <p>
                        {{ env('APP_NAME') }} may update these Terms periodically. Users will be notified of significant
                        changes.
                        <br>
                        Continued use of the platform constitutes acceptance of the revised Terms.

                    </p>

                    <h4 style="font-weight: bolder">15. Contact Information</h4>
                    <p>
                        For support or inquiries, contact {{ env('APP_NAME') }} Support Team at <br>
                        <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a>
                        <br>
                    </p>


                </div>
            </div>
        </div>


    </main>

@endsection
