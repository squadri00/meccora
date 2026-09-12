<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'terms',
    'title'       => 'Terms of Use — Meccora',
    'description' => 'The Terms and Conditions for using Meccora, a multi-tenant SaaS platform for independent auto repair shops, including SMS messaging rules and A2P compliance requirements.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = ['title' => 'Terms and Conditions', 'crumb' => 'Terms of Use'];
$legal = [
  'effective' => 'July 8, 2026',
  'intro'     => 'These Terms and Conditions govern the use of Meccora, a multi-tenant software platform designed for independent automotive repair shops. By creating an account, accessing, or using the Platform, you acknowledge that you have read, understood and agree to these Terms.',
  'sections'  => [
    ['h' => '1. Acceptance of Terms', 'p' => ['By accessing or using Meccora, you agree to be bound by these Terms and Conditions. If you do not agree, do not use the Platform.']],
    ['h' => '2. Description of Service', 'p' => ['Meccora is a multi-tenant SaaS platform for independent automotive repair shops. It provides customer management, appointments, repair tracking, service history, invoicing support, and transactional SMS notifications. The Platform is not intended for mass marketing or bulk advertising.']],
    ['h' => '3. Business Accounts', 'p' => ['Each subscribing repair shop is responsible for maintaining accurate account information, protecting login credentials, and ensuring only authorized employees access the Platform.']],
    ['h' => '4. Customer Data Ownership', 'p' => ['Each repair shop owns and controls the customer information it enters into the Platform. Meccora processes that information solely to provide the subscribed services.']],
    ['h' => '5. SMS Messaging Responsibilities', 'p' => ['Subscribers must obtain valid customer consent before sending SMS messages. Only transactional messages such as appointment reminders, maintenance reminders, repair status updates and vehicle pickup notifications may be sent through the messaging program. Marketing, political, affiliate, lead-generation, or unrelated promotional messages are prohibited.']],
    ['h' => '6. A2P Compliance', 'p' => ['Subscribers agree to comply with applicable messaging laws, carrier rules and Twilio A2P requirements. Consent records, including the consent method, timestamp and employee identifier, must be maintained accurately within the Platform.']],
    ['h' => '7. Prohibited Uses', 'p' => ['Users may not send spam, phishing messages, fraudulent communications, malware, unlawful content, or messages that violate applicable law. The Platform may suspend accounts engaged in prohibited activity without prior notice.']],
    ['h' => '8. Availability', 'p' => ['Reasonable efforts are made to maintain reliable service; however, uninterrupted availability is not guaranteed. Maintenance, software updates, third-party outages or force majeure events may temporarily affect availability.']],
    ['h' => '9. Third-Party Services', 'p' => ['The Platform integrates with third-party providers including SMS delivery services, cloud hosting and payment processors. Their services are governed by their own terms and policies.']],
    ['h' => '10. Fees and Subscription', 'p' => ['Subscription fees are payable according to the selected plan. Failure to pay may result in suspension or termination of service. Unless otherwise agreed, fees are non-refundable after services have been provided.']],
    ['h' => '11. Intellectual Property', 'p' => ['Meccora, including its software, design, documentation, trademarks and source code, remains the property of its owners except where third-party components are used under their respective licenses.']],
    ['h' => '12. Privacy', 'p' => ['Use of the Platform is also governed by the Privacy Policy. Subscribers are responsible for collecting customer information lawfully and providing any notices required under applicable privacy legislation.']],
    ['h' => '13. Security', 'p' => ['Subscribers must maintain secure passwords, restrict employee access appropriately and promptly report suspected unauthorized access.']],
    ['h' => '14. Suspension and Termination', 'p' => ['Accounts may be suspended or terminated for non-payment, illegal activity, repeated messaging violations, security threats, or breaches of these Terms.']],
    ['h' => '15. Limitation of Liability', 'p' => ['To the maximum extent permitted by law, Meccora shall not be liable for indirect, incidental, consequential, special or punitive damages, including lost profits, business interruption or loss of data.']],
    ['h' => '16. Indemnification', 'p' => ['Subscribers agree to indemnify and hold harmless Meccora from claims arising from their misuse of the Platform, their customer communications, or their failure to obtain required consent.']],
    ['h' => '17. Changes to the Service', 'p' => ['Features may be modified, improved or discontinued as the Platform evolves. Reasonable notice will be provided where practical for material changes affecting subscribers.']],
    ['h' => '18. Governing Law', 'p' => ['These Terms shall be governed by the laws applicable in the jurisdiction where Meccora operates unless another written agreement specifies otherwise.']],
  ],
];
require __DIR__ . '/partials/legal.php';
