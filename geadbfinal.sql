/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     04/01/2022 19:09:48                          */
/*==============================================================*/


drop table if exists APPLICATIONS;

drop table if exists ATTACHMENTS;

drop table if exists NOTIFICATIONS;

drop table if exists PREFERENCES;

drop table if exists PROPOSALS;

drop table if exists REL_USER_ATTS;

drop table if exists REL_USER_NOTS;

drop table if exists SUMMARIES;

drop table if exists USERS;

/*==============================================================*/
/* Table: PROPOSALS                                             */
/*==============================================================*/
create table PROPOSALS
(
   PROP_ID              int not NULL auto_increment,
   PROP_USER_ID			INT NOT NULL,
   PROP_COMPANY_ID		INT NOT NULL,
   PROP_APPROVED			TINYINT NOT NULL,
   PROP_JOBS            int not null,
   PROP_INTERESTED      int not null,
   PROP_COURSE          varchar(255) not null,
   PROP_TITLE           varchar(255) not null,
   PROP_DESCRIPTION 		VARCHAR(500) NOT NULL,
   PROP_PROFILE			VARCHAR(255) NOT NULL,
   PROP_PHOTO           varchar(255) not null,
   primary key (PROP_ID)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   USER_ID              int not NULL auto_increment,
   USER_NAME            varchar(255) not null,
   USER_PWD             varchar(255) not null,
   USER_MAIL            varchar(255) not null,
   USER_COURSE          varchar(255) not null,
   USER_TYPE            varchar(15) not null,
   USER_ADDRESS         varchar(255) not null,
   USER_CONTACT         varchar(30) not null,
   USER_ADMIN           bool not null,
   USER_FPERM           bool not null,
   USER_STATE				TINYINT NOT NULL,
   USER_PROP_ID         int,
   primary key (USER_ID)
);

/*==============================================================*/
/* Table: APPLICATIONS                                          */
/*==============================================================*/
create table APPLICATIONS
(
   APP_ID               int not NULL auto_increment,
   USER_ID              int not null,
   PROP_ID              int not null,
   APP_PREF             int not null,
   primary key (APP_ID),
   constraint FK_REL_PROP_APP foreign key (PROP_ID)
      references PROPOSALS (PROP_ID) on delete restrict on update restrict,
   constraint FK_REL_USER_APP foreign key (USER_ID)
      references USERS (USER_ID) on delete restrict on update restrict
);

/*==============================================================*/
/* Table: SUMMARIES                                             */
/*==============================================================*/
create table SUMMARIES
(
   SUM_ID               int not NULL auto_increment,
   PROP_ID              int,
   SUM_DATE             varchar(255) not null,
   SUM_DESCRPTION       varchar(255) not null,
   SUM_OBJECTIVES       varchar(255) not null,
   SUM_HOUR             varchar(255) not null,
   primary key (SUM_ID),
   constraint FK_REL_PROP_SUM foreign key (PROP_ID)
      references PROPOSALS (PROP_ID) on delete restrict on update restrict
);

/*==============================================================*/
/* Table: ATTACHMENTS                                           */
/*==============================================================*/
create table ATTACHMENTS
(
   ATT_ID               int not NULL auto_increment,
   PROP_ID              int not null,
   SUM_ID               int,
   ATT_PATH             varchar(255) not null,
   primary key (ATT_ID),
   constraint FK_REL_PROP_ATT foreign key (PROP_ID)
      references PROPOSALS (PROP_ID) on delete restrict on update restrict,
   constraint FK_REL_SUM_ATT foreign key (SUM_ID)
      references SUMMARIES (SUM_ID) on delete restrict on update restrict
);

/*==============================================================*/
/* Table: NOTIFICATIONS                                         */
/*==============================================================*/
create table NOTIFICATIONS
(
   NOT_ID               int not NULL auto_increment,
   NOT_TITLE            varchar(255) not null,
   NOT_DESCRIPTION      varchar(255) not null,
   NOT_STATE            varchar(255) not null,
   NOT_MAIL             varchar(255) not null,
   primary key (NOT_ID)
);

/*==============================================================*/
/* Table: PREFERENCES                                           */
/*==============================================================*/
create table PREFERENCES
(
   PREF_ID              int not NULL auto_increment,
   PROP_ID              int not null,
   USER_ID              int not null,
   primary key (PREF_ID),
   constraint FK_REL_USER_PREF foreign key (USER_ID)
      references USERS (USER_ID) on delete restrict on update restrict,
   constraint FK_REL_PROP_PREF foreign key (PROP_ID)
      references PROPOSALS (PROP_ID) on delete restrict on update restrict
);

/*==============================================================*/
/* Table: REL_USER_ATTS                                         */
/*==============================================================*/
create table REL_USER_ATTS
(
   USER_ID              int not null,
   SUM_ID               int not null,
   primary key (USER_ID, SUM_ID),
   constraint FK_REL_USER_ATT foreign key (USER_ID)
      references USERS (USER_ID) on delete restrict on update restrict,
   constraint FK_REL_USER_ATT2 foreign key (SUM_ID)
      references SUMMARIES (SUM_ID) on delete restrict on update restrict
);

/*==============================================================*/
/* Table: REL_USER_NOTS                                         */
/*==============================================================*/
create table REL_USER_NOTS
(
   NOT_ID               int not null,
   USER_ID              int not null,
   primary key (NOT_ID, USER_ID),
   constraint FK_REL_USER_NOT foreign key (NOT_ID)
      references NOTIFICATIONS (NOT_ID) on delete restrict on update restrict,
   constraint FK_REL_USER_NOT2 foreign key (USER_ID)
      references USERS (USER_ID) on delete restrict on update restrict
);

