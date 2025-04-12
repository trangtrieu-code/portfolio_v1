# FinBank's Cloud Security Setup - Assignment Answers

## Part A – Short Answer (15 marks)

### 1. Principle of Least Privilege and IAM Roles (5 marks)
The principle of least privilege states that users and services should only be granted the minimum permissions necessary to perform their required tasks. For FinBank's IAM roles, this means:
- Creating specific IAM roles for different job functions (e.g., separate roles for developers, administrators, and application services)
- Regularly auditing and reviewing permissions to ensure they remain appropriate
- Using AWS-managed policies where possible and creating custom policies only when necessary
- Implementing role-based access control (RBAC) to manage permissions at a group level

### 2. Data at Rest Protection in S3 (5 marks)
Data at rest refers to data that is stored in a persistent state, such as in databases, file systems, or storage devices. To protect data at rest in Amazon S3, FinBank should:
- Enable server-side encryption using AWS KMS (Key Management Service)
- Implement bucket policies to control access
- Use S3 Object Lock to prevent accidental or malicious deletion
- Enable versioning to maintain data history
- Configure lifecycle policies to automatically transition data to more secure storage tiers

### 3. Security Group Rules Responsibility (5 marks)
According to AWS's shared responsibility model, FinBank (the customer) is responsible for configuring security group rules on EC2 instances. This includes:
- Defining inbound and outbound traffic rules
- Specifying allowed ports and protocols
- Managing IP ranges and CIDR blocks
- Regularly reviewing and updating rules based on changing requirements

## Part B – Scenario-Based Question (15 marks)

### 1. AWS Service for Activity Tracking (5 marks)
AWS CloudTrail is the service that can help track and log user activity. FinBank should monitor:
- IAM user and role authentication attempts
- API calls made to AWS services
- Resource creation, modification, and deletion events
- Failed access attempts and unauthorized actions
- Changes to security settings and configurations

### 2. Automation for Security Settings (5 marks)
AWS Systems Manager can help FinBank automate security settings across environments by:
- Using Parameter Store to manage configuration data
- Implementing automated patch management
- Creating standardized security baselines
- Automating compliance checks and reporting
- Managing access and permissions consistently

### 3. CIA Triad Application to RDS (5 marks)
The CIA triad applies to FinBank's RDS customer records as follows:
- **Confidentiality**: Implement encryption at rest and in transit, use IAM authentication, and maintain strict access controls
- **Integrity**: Enable automated backups, implement change tracking, and use database audit logging
- **Availability**: Configure multi-AZ deployments, implement proper backup strategies, and maintain disaster recovery procedures

## Part C – Quick Reflection (10 marks)

As a customer of AWS, FinBank has several critical responsibilities to ensure their cloud infrastructure remains secure. Two specific responsibilities include:

1. **Access Management and Identity Control**: FinBank must actively manage their IAM users, roles, and permissions. This includes regularly rotating access keys, reviewing and revoking unnecessary permissions, and implementing strong authentication mechanisms like multi-factor authentication (MFA). They must also ensure that their employees follow security best practices and receive regular security training.

2. **Data Protection and Compliance**: FinBank is responsible for implementing appropriate security controls to protect their data. This includes configuring encryption settings for their S3 buckets, RDS databases, and EC2 instances. They must also ensure their security configurations comply with financial industry regulations and standards, such as PCI DSS and GDPR, by implementing necessary controls and maintaining audit trails.

These responsibilities are crucial because AWS provides the infrastructure, but the security of the applications, data, and access patterns lies with the customer. FinBank must actively manage these aspects to maintain a secure cloud environment. 