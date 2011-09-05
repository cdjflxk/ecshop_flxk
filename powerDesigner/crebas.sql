/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2011/9/5 17:45:22                            */
/*==============================================================*/


drop table if exists xkshop.tmp_xk_product_categroy_model;

drop table if exists xkshop.tmp_xk_product_model;

drop table if exists xkshop.tmp_xk_product_categroy_model;

rename table xkshop.xk_product_categroy_model to tmp_xk_product_categroy_model;

drop table if exists xkshop.tmp_xk_product_model;

rename table xkshop.xk_product_model to tmp_xk_product_model;

/*==============================================================*/
/* Table: xk_product_categroy_model                             */
/*==============================================================*/
create table xk_product_categroy_model
(
   id                   int(11) not null,
   name                 varchar(45),
   primary key (id)
);

insert into xk_product_categroy_model (id, name)
select id, name
from xkshop.tmp_xk_product_categroy_model;

drop table if exists xkshop.tmp_xk_product_categroy_model;

/*==============================================================*/
/* Table: xk_product_model                                      */
/*==============================================================*/
create table xk_product_model
(
   id                   int(11) not null,
   name                 national varchar(50) not null,
   category_id          int(11) not null,
   description          varchar(1000),
   market_price         int(11) not null,
   shop_price           int(11) not null,
   thumb                varchar(255),
   image                varchar(255),
   is_on_sale           tinyint(1),
   is_promote           tinyint(1),
   primary key (id)
);

insert into xk_product_model (id, name, category_id, description, market_price, shop_price, thumb, image, is_on_sale, is_promote)
select id, name, category_id, description, market_price, shop_price, thumb, image, is_on_sale, is_promote
from xkshop.tmp_xk_product_model;

drop table if exists xkshop.tmp_xk_product_model;

alter table xk_product_model add constraint FK_Reference_2 foreign key (id)
      references xk_product_categroy_model (id) on delete restrict on update restrict;

