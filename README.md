# TecnoPro
#Engelber Cifuentes
analisis_sistemas
AUTHOR
Name: Engelber Cifuentes
Email: ecifuentesm6@miumg.edu.gt
GitHub: EngelskoGT

explanation create the project database

-- CREATE DATABASE ON MSSQL SERVER 2022
CREATE DATABASE [BANKING]
GO

-- USE DATABASE
USE [BANKING]
GO

-- Create table for the main central bank 
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[CENTRALS]') AND type in (N'U'))
CREATE TABLE CENTRALS (
    id_central INT PRIMARY KEY IDENTITY(1,1), -- Unique ID for each central bank
    name_central NVARCHAR(100) NOT NULL, -- Name of the central
    address_central NVARCHAR(100) NOT NULL, -- Physical adress of the central
    phone_central NVARCHAR(20) NOT NULL, -- Contact number of the central
    email_central NVARCHAR(100) NOT NULL, -- Email of the central
    is_active BIT DEFAULT 1 NOT NULL, -- Status, if is active or not
    created_date DATETIME DEFAULT GETDATE() NOT NULL, -- When the record was created
    updated_date DATETIME DEFAULT GETDATE() NOT NULL -- Last time this record was updated
);
-- Index for searching centrals by name
CREATE INDEX IX_CENTRALS_Name ON CENTRALS(name_central);

-- Create table for branches (linked to centrals)
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[BRANCHES]') AND type in (N'U'))
CREATE TABLE BRANCHES (
    id_branch INT PRIMARY KEY IDENTITY(1,1),
    code_branch NVARCHAR(10) UNIQUE NOT NULL,
    name_branch NVARCHAR(100) NOT NULL,
    address_branch NVARCHAR(100) NOT NULL,
    phone_branch NVARCHAR(20) NOT NULL,
    email_branch NVARCHAR(100) NOT NULL,
    id_central_branch INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_central_branch) REFERENCES CENTRALS(id_central) ON DELETE CASCADE
);
-- Index for searching branches by code
CREATE INDEX IX_BRANCHES_Code ON BRANCHES(code_branch);
-- Index for searching branches by name
CREATE INDEX IX_BRANCHES_Name ON BRANCHES(name_branch);
-- Index for branches linked to a central
CREATE INDEX IX_BRANCHES_Central ON BRANCHES(id_central_branch);

-- Create table for ATMs (linked to branches)
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ATMS]') AND type in (N'U'))
CREATE TABLE ATMS (
    id_atm INT PRIMARY KEY IDENTITY(1,1),
    code_atm NVARCHAR(10) UNIQUE NOT NULL,
    name_atm NVARCHAR(100) NOT NULL,
    address_atm NVARCHAR(100) NOT NULL,
    phone_atm NVARCHAR(20) NOT NULL,
    email_atm NVARCHAR(100) NOT NULL,
    id_branch_atm INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_branch_atm) REFERENCES BRANCHES(id_branch) ON DELETE CASCADE
);
-- Index for searching ATMs by code
CREATE INDEX IX_ATMS_Code ON ATMS(code_atm);
-- Index for searching ATMs by branch
CREATE INDEX IX_ATMS_Branch ON ATMS(id_branch_atm);

-- Create table for Account Holders (Clients of the bank)
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ACCOUNTS_HOLDERS]') AND type in (N'U'))
CREATE TABLE ACCOUNTS_HOLDERS (
    id_account_holder INT PRIMARY KEY IDENTITY(1,1),
    name_account_holder NVARCHAR(100) NOT NULL,
    address_account_holder NVARCHAR(100) NOT NULL,
    phone_account_holder NVARCHAR(20) NOT NULL,
    email_account_holder NVARCHAR(100) NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL
);
-- Index for searching account holders by name
CREATE INDEX IX_ACCOUNTS_HOLDERS_Name ON ACCOUNTS_HOLDERS(name_account_holder);
-- Index for searching account holders by phone
CREATE INDEX IX_ACCOUNTS_HOLDERS_Phone ON ACCOUNTS_HOLDERS(phone_account_holder);

-- Create table for Bank Accounts (linked to Account Holders and Branches)
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ACCOUNTS]') AND type in (N'U'))
CREATE TABLE ACCOUNTS (
    id_account INT PRIMARY KEY IDENTITY(1,1),
    number_account NVARCHAR(10) UNIQUE NOT NULL,
    type_account NVARCHAR(10) CHECK (type_account IN ('AHORRO', 'MONETARIA')),
    currency_account NVARCHAR(10) CHECK (currency_account IN ('USD', 'GTQ')),
    balance_account DECIMAL(18,2) DEFAULT 0.00 NOT NULL,
    id_account_holder_account INT NOT NULL,
    id_branch_account INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_account_holder_account) REFERENCES ACCOUNTS_HOLDERS(id_account_holder) ON DELETE CASCADE,
    FOREIGN KEY (id_branch_account) REFERENCES BRANCHES(id_branch) ON DELETE CASCADE
);
-- Index for searching accounts by number
CREATE INDEX IX_ACCOUNTS_Number ON ACCOUNTS(number_account);
-- Index for searching accounts by account holder
CREATE INDEX IX_ACCOUNTS_Holder ON ACCOUNTS(id_account_holder_account);
-- Index for searching accounts by branch
CREATE INDEX IX_ACCOUNTS_Branch ON ACCOUNTS(id_branch_account);

-- Create table for Transactions (linked to Accounts and ATMs)
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[TRANSACTIONS]') AND type in (N'U'))
CREATE TABLE TRANSACTIONS (
    id_transaction INT PRIMARY KEY IDENTITY(1,1),
    type_transaction NVARCHAR(10) CHECK (type_transaction IN ('DEPOSITO', 'RETIRO')),
    amount_transaction DECIMAL(18,2) DEFAULT 0.00 NOT NULL,
    id_account_transaction INT NOT NULL,
    id_atm_transaction INT NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_account_transaction) REFERENCES ACCOUNTS(id_account) ON DELETE NO ACTION,
    FOREIGN KEY (id_atm_transaction) REFERENCES ATMS(id_atm) ON DELETE NO ACTION
);
-- Index for searching transactions by account
CREATE INDEX IX_TRANSACTIONS_Account ON TRANSACTIONS(id_account_transaction);
-- Index for searching transactions by ATM
CREATE INDEX IX_TRANSACTIONS_ATM ON TRANSACTIONS(id_atm_transaction);
-- Index for transactions by date (for filtering by time)
CREATE INDEX IX_TRANSACTIONS_Date ON TRANSACTIONS(created_date);
