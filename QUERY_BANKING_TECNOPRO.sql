-- CREATE DATABASE ON MSSQL SERVER 2022
CREATE DATABASE [BANKING]
GO

-- USE DATABASE
USE [BANKING]
GO

-- CREATE TABLE CENTRAL BANK
CREATE TABLE CENTRALS (
    id_central INT PRIMARY KEY IDENTITY(1,1),
    name_central NVARCHAR(100) NOT NULL,
    address_central NVARCHAR(100) NOT NULL,
    phone_central NVARCHAR(20) NOT NULL,
    email_central NVARCHAR(100) NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL, -- Allows enabling/disabling central banks
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL
);

-- CREATE TABLE BRANCHES
CREATE TABLE BRANCHES (
    id_branch INT PRIMARY KEY IDENTITY(1,1),
    code_branch NVARCHAR(10) UNIQUE NOT NULL,
    name_branch NVARCHAR(100) NOT NULL,
    address_branch NVARCHAR(100) NOT NULL,
    phone_branch NVARCHAR(20) NOT NULL,
    email_branch NVARCHAR(100) NOT NULL,
    id_central_branch INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL, -- Allows enabling/disabling branches
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_central_branch) REFERENCES CENTRALS(id_central) ON DELETE CASCADE
);

-- CREATE TABLE ATMS
CREATE TABLE ATMS (
    id_atm INT PRIMARY KEY IDENTITY(1,1),
    code_atm NVARCHAR(10) UNIQUE NOT NULL,
    name_atm NVARCHAR(100) NOT NULL,
    address_atm NVARCHAR(100) NOT NULL,
    phone_atm NVARCHAR(20) NOT NULL,
    email_atm NVARCHAR(100) NOT NULL,
    id_branch_atm INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL, -- Allows enabling/disabling ATMs
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_branch_atm) REFERENCES BRANCHES(id_branch) ON DELETE CASCADE
);

-- CREATE TABLE ACCOUNT HOLDERS
CREATE TABLE ACCOUNTS_HOLDERS (
    id_account_holder INT PRIMARY KEY IDENTITY(1,1),
    name_account_holder NVARCHAR(100) NOT NULL,
    address_account_holder NVARCHAR(100) NOT NULL,
    phone_account_holder NVARCHAR(20) NOT NULL,
    email_account_holder NVARCHAR(100) NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL, -- Allows enabling/disabling users
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL
);

-- CREATE TABLE ACCOUNTS
CREATE TABLE ACCOUNTS (
    id_account INT PRIMARY KEY IDENTITY(1,1),
    number_account NVARCHAR(10) UNIQUE NOT NULL,
    type_account NVARCHAR(10) CHECK (type_account IN ('SAVINGS', 'CHECKING')),
    currency_account NVARCHAR(10) CHECK (currency_account IN ('USD', 'GTQ')),
    balance_account DECIMAL(18,2) DEFAULT 0.00 NOT NULL,
    id_account_holder_account INT NOT NULL,
    id_branch_account INT NOT NULL,
    is_active BIT DEFAULT 1 NOT NULL, -- Allows enabling/disabling accounts
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_account_holder_account) REFERENCES ACCOUNTS_HOLDERS(id_account_holder) ON DELETE CASCADE,
    FOREIGN KEY (id_branch_account) REFERENCES BRANCHES(id_branch) ON DELETE CASCADE
);

-- CREATE TABLE TRANSACTIONS
CREATE TABLE TRANSACTIONS (
    id_transaction INT PRIMARY KEY IDENTITY(1,1),
    type_transaction NVARCHAR(10) CHECK (type_transaction IN ('DEPOSIT', 'WITHDRAWAL')),
    amount_transaction DECIMAL(18,2) DEFAULT 0.00 NOT NULL,
    id_account_transaction INT NOT NULL,
    id_atm_transaction INT NOT NULL,
    created_date DATETIME DEFAULT GETDATE() NOT NULL,
    updated_date DATETIME DEFAULT GETDATE() NOT NULL,
    FOREIGN KEY (id_account_transaction) REFERENCES ACCOUNTS(id_account) ON DELETE CASCADE,
    FOREIGN KEY (id_atm_transaction) REFERENCES ATMS(id_atm) ON DELETE CASCADE
);
