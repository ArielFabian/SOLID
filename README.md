# Subscription Management with SOLID
This project was created in order to keep in track all the SOLID concepts that should be an elemental knowledge for every developer.

To make this example be more close to a real life example, I ask for help to Chat-gpt to generate a single problem description to work with, whitout code generation, examples or tips, simulating a real code interview to design a very usefull solution.

## Initial Breef
Your company wants to build a Subscription Management System to handle customer subscriptions for various digital services (like video streaming, news websites, SaaS apps, etc.).

The system should track customers, their subscriptions, billing cycles, and payment statuses.

# Questions for design
This next questions were made to Chat-gtp in order to have a more detailed design:
1. Which is the essential information for a customer?
2. Which is the essential information for a subscription?
3. Which is the essential information for billing?
4. Which is the essential information for payments?
5. Should exist different types of customers?
6. If should, do this customer should have discounts depending on his/her level?
7. If we are talking about subscriptions, how many services exists?
8. What is the difference between those?
9. How many payment methods will be accepted?
10. The payment methods should give discounts?
11. If should have discounts, how this has to work and how much the discount should be?
12. The payment methods will depend on region availability?
13. If this is true, how this should work?
14. How much types of subscritptions should exist?
15. Is there a discount for early payment?
16. Does the billing feature stands only to show historical user payments?
17. Should this has to be filterable? If should, how much filters should exist?

# Details
With those questions, Chat-gpt generate this example information to start working:
## Customer-related
1. Which is the essential information for a customer?
  - id, full_name, email, country, and optionally customer_type (individual, business)

5. Should there exist different types of customers?
  - Yes — there are two:
    -  Individual: standard customer.
    -  Business: eligible for bulk discounts and invoicing.

6. If so, do these customers have discounts depending on their level?
  -  Yes: Businesses get a 10% discount if subscribing to more than 5 services.

## Subscription-related
2. What is the essential information for a subscription?
  -  id, customer_id, service_id, status, start_date, end_date, billing_cycle (monthly, yearly, trial), and auto_renew

7. How many services exist?
  -  Three for now:
    -  VideoStreaming
    -  CloudStorage
    -  OnlineMagazine

8. What’s the difference between those?
  -  Each has:
    -  A different base price
    -  A different trial period (e.g. 14 days for VideoStreaming, 7 for OnlineMagazine)
    -  Optional add-ons (e.g. HD streaming, extra GB, print delivery)

14. How many types of subscriptions exist?
  -  Three:
    -  Trial (free, limited time)
    -  Monthly
    -  Yearly (gets 20% discount over 12 monthly payments)

## Billing & Payments
3. What is the essential information for billing?
  -  billing_id, subscription_id, billing_period, amount_due, due_date, paid_at, status (pending, paid, overdue)

16. Does billing only show historical user payments?
  -  No — billing includes upcoming charges too (if auto-renew is on).

17. Should billing be filterable? If so, how many filters?
  -  Yes. Must support filtering by:
    -  Date range
    -  Customer ID
    -  Status (paid, pending, overdue)

4. What is the essential information for payments?
  -  payment_id, billing_id, payment_method, amount, paid_at, currency

9. How many payment methods will be accepted?
  -  Three: CreditCard, PayPal, BankTransfer

10. Do payment methods give discounts?
  -  Only BankTransfer gives a 2% discount (manual processing saves fees)

11. If so, how should that work and how much is the discount?
  -  If payment method is BankTransfer, apply 2% off the total billing amount.

12. Are payment methods region-specific?
  -  Yes.

13. How should that work?
  -  CreditCard: globally available
  -  PayPal: only in US, EU
  -  BankTransfer: only in EU
The system should validate availability based on the customer's country before letting them select a payment method.

15. Is there a discount for early payment?
  -  No early payment discount for now.
# Next improvements
 - Creation of child classes in order to code the implementations for its parent abstract methods
 - Creation of repositories
 - Expand the actual classes to keep growing the project in order to implement an API
