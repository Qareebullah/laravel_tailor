PGDMP  3    7                }            tailor    17.4    17.4 k    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            �           1262    16393    tailor    DATABASE     l   CREATE DATABASE tailor WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en-US';
    DROP DATABASE tailor;
                     postgres    false            �            1259    20016 	   customers    TABLE     r  CREATE TABLE public.customers (
    id bigint NOT NULL,
    "firstName" character varying(255) NOT NULL,
    "lastName" character varying(255) NOT NULL,
    mobile character varying(255) NOT NULL,
    added_by bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.customers;
       public         heap r       postgres    false            �            1259    20015    customers_id_seq    SEQUENCE     y   CREATE SEQUENCE public.customers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.customers_id_seq;
       public               postgres    false    227            �           0    0    customers_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.customers_id_seq OWNED BY public.customers.id;
          public               postgres    false    226            �            1259    28141    expenses    TABLE     �  CREATE TABLE public.expenses (
    id bigint NOT NULL,
    purpose text NOT NULL,
    amount numeric(10,3) NOT NULL,
    expense_by bigint NOT NULL,
    inserted_by bigint NOT NULL,
    payment_method character varying(255) NOT NULL,
    reference character varying(255) NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.expenses;
       public         heap r       postgres    false            �            1259    28140    expenses_id_seq    SEQUENCE     x   CREATE SEQUENCE public.expenses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.expenses_id_seq;
       public               postgres    false    237            �           0    0    expenses_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.expenses_id_seq OWNED BY public.expenses.id;
          public               postgres    false    236            �            1259    19990    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap r       postgres    false            �            1259    19989    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public               postgres    false    223            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public               postgres    false    222            �            1259    28169    incomes    TABLE     �  CREATE TABLE public.incomes (
    id bigint NOT NULL,
    amount numeric(10,3) NOT NULL,
    source character varying(255) NOT NULL,
    description text,
    payment_method character varying(255) NOT NULL,
    reference character varying(255) NOT NULL,
    inserted_by bigint NOT NULL,
    status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.incomes;
       public         heap r       postgres    false            �            1259    28168    incomes_id_seq    SEQUENCE     w   CREATE SEQUENCE public.incomes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.incomes_id_seq;
       public               postgres    false    239            �           0    0    incomes_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.incomes_id_seq OWNED BY public.incomes.id;
          public               postgres    false    238            �            1259    20106    measurements    TABLE     �	  CREATE TABLE public.measurements (
    id bigint NOT NULL,
    customer_id bigint NOT NULL,
    tailor_id bigint NOT NULL,
    stock_id bigint NOT NULL,
    length character varying(255),
    chest character varying(255),
    shoulder character varying(255),
    sleeve character varying(255),
    sleeve_type character varying(255),
    collar_type character varying(255),
    tonban_length character varying(255),
    tonban_type character varying(255),
    cuff_type character varying(255),
    cuff_size character varying(255),
    yakhan character varying(255),
    yakhan_type character varying(255),
    skirt_type character varying(255),
    front_pocket character varying(255),
    front_double_pockets character varying(255),
    side_pocket character varying(255),
    side_double_pockets character varying(255),
    buttons_type character varying(255),
    shirt_length character varying(255),
    shirt_chest character varying(255),
    shirt_shoulder character varying(255),
    shirt_sleeve character varying(255),
    shirt_collar character varying(255),
    shirt_front_pock character varying(255),
    shirt_front_double_pockets character varying(255),
    shirt_type character varying(255),
    shirt_buttons_type character varying(255),
    pant_length character varying(255),
    pant_waist character varying(255),
    pant_thigh character varying(255),
    pant_type character varying(255),
    pant_buttons character varying(255),
    coat_length character varying(255),
    coat_chest character varying(255),
    coat_waist character varying(255),
    coat_shoulder character varying(255),
    coat_sleeve character varying(255),
    shirt_collar_type character varying(255),
    coat_sleeve_type character varying(255),
    coat_type character varying(255),
    coat_pockets character varying(255),
    coat_inside_pockets character varying(255),
    coat_buttons character varying(255),
    waistcoat_length character varying(255),
    waistcoat_chest character varying(255),
    waistcoat_waist character varying(255),
    waistcoat_shoulder character varying(255),
    waistcoat_type character varying(255),
    waistcoat_pockets character varying(255),
    waistcoat_inside_pockets character varying(255),
    waistcoat_buttons character varying(255),
    added_by bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
     DROP TABLE public.measurements;
       public         heap r       postgres    false            �            1259    20105    measurements_id_seq    SEQUENCE     |   CREATE SEQUENCE public.measurements_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.measurements_id_seq;
       public               postgres    false    231            �           0    0    measurements_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.measurements_id_seq OWNED BY public.measurements.id;
          public               postgres    false    230            �            1259    19965 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap r       postgres    false            �            1259    19964    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public               postgres    false    218            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public               postgres    false    217            �            1259    20155    orders    TABLE     �  CREATE TABLE public.orders (
    id bigint NOT NULL,
    customer_id bigint NOT NULL,
    tailor_id bigint NOT NULL,
    added_by bigint NOT NULL,
    order_status character varying(255) NOT NULL,
    payment double precision NOT NULL,
    due double precision NOT NULL,
    total double precision NOT NULL,
    payment_status character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.orders;
       public         heap r       postgres    false            �            1259    20154    orders_id_seq    SEQUENCE     v   CREATE SEQUENCE public.orders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.orders_id_seq;
       public               postgres    false    233            �           0    0    orders_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;
          public               postgres    false    232            �            1259    19982    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap r       postgres    false            �            1259    20002    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap r       postgres    false            �            1259    20001    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public               postgres    false    225            �           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public               postgres    false    224            �            1259    20192    registrations    TABLE     �  CREATE TABLE public.registrations (
    id bigint NOT NULL,
    "firstName" character(255) NOT NULL,
    "lastName" character(255) NOT NULL,
    gender character(255) NOT NULL,
    dob date NOT NULL,
    skills character varying(255) NOT NULL,
    salary numeric(10,2) NOT NULL,
    salary_type character varying(255) NOT NULL,
    mobile character varying(255) NOT NULL,
    agreement character varying(255) NOT NULL,
    agreement_file character varying(255) NOT NULL,
    photo character varying(255) NOT NULL,
    added_by bigint,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
 !   DROP TABLE public.registrations;
       public         heap r       postgres    false            �            1259    20191    registrations_id_seq    SEQUENCE     }   CREATE SEQUENCE public.registrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.registrations_id_seq;
       public               postgres    false    235            �           0    0    registrations_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.registrations_id_seq OWNED BY public.registrations.id;
          public               postgres    false    234            �            1259    28183    reports    TABLE     �  CREATE TABLE public.reports (
    id bigint NOT NULL,
    type character varying(255) NOT NULL,
    total_orders numeric(12,2) NOT NULL,
    total_customers numeric(12,2) NOT NULL,
    total_staff numeric(12,2) NOT NULL,
    total_stock numeric(12,2) NOT NULL,
    total_incomes numeric(12,2) NOT NULL,
    total_expense numeric(12,2) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.reports;
       public         heap r       postgres    false            �            1259    28182    reports_id_seq    SEQUENCE     w   CREATE SEQUENCE public.reports_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.reports_id_seq;
       public               postgres    false    241            �           0    0    reports_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.reports_id_seq OWNED BY public.reports.id;
          public               postgres    false    240            �            1259    20048    stocks    TABLE     Y  CREATE TABLE public.stocks (
    id bigint NOT NULL,
    product character varying(255) NOT NULL,
    product_type character varying(255) NOT NULL,
    amount numeric(10,2) NOT NULL,
    color character varying(255) NOT NULL,
    purchase_price numeric(10,2) NOT NULL,
    expense numeric(10,2) NOT NULL,
    sell_price numeric(10,2) NOT NULL,
    medan_country character varying(255) NOT NULL,
    purchase_by bigint NOT NULL,
    added_by bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);
    DROP TABLE public.stocks;
       public         heap r       postgres    false            �            1259    20047    stocks_id_seq    SEQUENCE     v   CREATE SEQUENCE public.stocks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.stocks_id_seq;
       public               postgres    false    229            �           0    0    stocks_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.stocks_id_seq OWNED BY public.stocks.id;
          public               postgres    false    228            �            1259    19972    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap r       postgres    false            �            1259    19971    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public               postgres    false    220            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public               postgres    false    219            �           2604    20019    customers id    DEFAULT     l   ALTER TABLE ONLY public.customers ALTER COLUMN id SET DEFAULT nextval('public.customers_id_seq'::regclass);
 ;   ALTER TABLE public.customers ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    227    226    227            �           2604    28144    expenses id    DEFAULT     j   ALTER TABLE ONLY public.expenses ALTER COLUMN id SET DEFAULT nextval('public.expenses_id_seq'::regclass);
 :   ALTER TABLE public.expenses ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    237    236    237            �           2604    19993    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    223    222    223            �           2604    28172 
   incomes id    DEFAULT     h   ALTER TABLE ONLY public.incomes ALTER COLUMN id SET DEFAULT nextval('public.incomes_id_seq'::regclass);
 9   ALTER TABLE public.incomes ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    238    239    239            �           2604    20109    measurements id    DEFAULT     r   ALTER TABLE ONLY public.measurements ALTER COLUMN id SET DEFAULT nextval('public.measurements_id_seq'::regclass);
 >   ALTER TABLE public.measurements ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    230    231    231            �           2604    19968    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    217    218    218            �           2604    20158 	   orders id    DEFAULT     f   ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);
 8   ALTER TABLE public.orders ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    233    232    233            �           2604    20005    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    224    225    225            �           2604    20195    registrations id    DEFAULT     t   ALTER TABLE ONLY public.registrations ALTER COLUMN id SET DEFAULT nextval('public.registrations_id_seq'::regclass);
 ?   ALTER TABLE public.registrations ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    234    235    235            �           2604    28186 
   reports id    DEFAULT     h   ALTER TABLE ONLY public.reports ALTER COLUMN id SET DEFAULT nextval('public.reports_id_seq'::regclass);
 9   ALTER TABLE public.reports ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    240    241    241            �           2604    20051 	   stocks id    DEFAULT     f   ALTER TABLE ONLY public.stocks ALTER COLUMN id SET DEFAULT nextval('public.stocks_id_seq'::regclass);
 8   ALTER TABLE public.stocks ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    229    228    229            �           2604    19975    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    219    220    220            �          0    20016 	   customers 
   TABLE DATA           v   COPY public.customers (id, "firstName", "lastName", mobile, added_by, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    227   �       �          0    28141    expenses 
   TABLE DATA           �   COPY public.expenses (id, purpose, amount, expense_by, inserted_by, payment_method, reference, status, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    237   ٘       �          0    19990    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public               postgres    false    223   ��       �          0    28169    incomes 
   TABLE DATA           �   COPY public.incomes (id, amount, source, description, payment_method, reference, inserted_by, status, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    239   ͙       �          0    20106    measurements 
   TABLE DATA           i  COPY public.measurements (id, customer_id, tailor_id, stock_id, length, chest, shoulder, sleeve, sleeve_type, collar_type, tonban_length, tonban_type, cuff_type, cuff_size, yakhan, yakhan_type, skirt_type, front_pocket, front_double_pockets, side_pocket, side_double_pockets, buttons_type, shirt_length, shirt_chest, shirt_shoulder, shirt_sleeve, shirt_collar, shirt_front_pock, shirt_front_double_pockets, shirt_type, shirt_buttons_type, pant_length, pant_waist, pant_thigh, pant_type, pant_buttons, coat_length, coat_chest, coat_waist, coat_shoulder, coat_sleeve, shirt_collar_type, coat_sleeve_type, coat_type, coat_pockets, coat_inside_pockets, coat_buttons, waistcoat_length, waistcoat_chest, waistcoat_waist, waistcoat_shoulder, waistcoat_type, waistcoat_pockets, waistcoat_inside_pockets, waistcoat_buttons, added_by, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    231   ��       �          0    19965 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public               postgres    false    218   ��       �          0    20155    orders 
   TABLE DATA           �   COPY public.orders (id, customer_id, tailor_id, added_by, order_status, payment, due, total, payment_status, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    233   ٜ       �          0    19982    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public               postgres    false    221   /�       �          0    20002    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public               postgres    false    225   L�       �          0    20192    registrations 
   TABLE DATA           �   COPY public.registrations (id, "firstName", "lastName", gender, dob, skills, salary, salary_type, mobile, agreement, agreement_file, photo, added_by, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    235   6�       �          0    28183    reports 
   TABLE DATA           �   COPY public.reports (id, type, total_orders, total_customers, total_staff, total_stock, total_incomes, total_expense, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    241   ��       �          0    20048    stocks 
   TABLE DATA           �   COPY public.stocks (id, product, product_type, amount, color, purchase_price, expense, sell_price, medan_country, purchase_by, added_by, created_at, updated_at, deleted_at) FROM stdin;
    public               postgres    false    229   ��       �          0    19972    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public               postgres    false    220   @�       �           0    0    customers_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.customers_id_seq', 8, true);
          public               postgres    false    226            �           0    0    expenses_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.expenses_id_seq', 16, true);
          public               postgres    false    236            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public               postgres    false    222            �           0    0    incomes_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.incomes_id_seq', 16, true);
          public               postgres    false    238            �           0    0    measurements_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.measurements_id_seq', 23, true);
          public               postgres    false    230            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 17, true);
          public               postgres    false    217            �           0    0    orders_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.orders_id_seq', 32, true);
          public               postgres    false    232            �           0    0    personal_access_tokens_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 124, true);
          public               postgres    false    224            �           0    0    registrations_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.registrations_id_seq', 11, true);
          public               postgres    false    234            �           0    0    reports_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.reports_id_seq', 19, true);
          public               postgres    false    240            �           0    0    stocks_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.stocks_id_seq', 10, true);
          public               postgres    false    228            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 15, true);
          public               postgres    false    219            �           2606    20025 !   customers customers_mobile_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.customers
    ADD CONSTRAINT customers_mobile_unique UNIQUE (mobile);
 K   ALTER TABLE ONLY public.customers DROP CONSTRAINT customers_mobile_unique;
       public                 postgres    false    227            �           2606    20023    customers customers_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.customers
    ADD CONSTRAINT customers_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.customers DROP CONSTRAINT customers_pkey;
       public                 postgres    false    227            �           2606    28148    expenses expenses_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.expenses
    ADD CONSTRAINT expenses_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.expenses DROP CONSTRAINT expenses_pkey;
       public                 postgres    false    237            �           2606    19998    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public                 postgres    false    223            �           2606    20000 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public                 postgres    false    223            �           2606    28176    incomes incomes_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.incomes
    ADD CONSTRAINT incomes_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.incomes DROP CONSTRAINT incomes_pkey;
       public                 postgres    false    239            �           2606    20113    measurements measurements_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.measurements
    ADD CONSTRAINT measurements_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.measurements DROP CONSTRAINT measurements_pkey;
       public                 postgres    false    231            �           2606    19970    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public                 postgres    false    218            �           2606    20162    orders orders_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_pkey;
       public                 postgres    false    233            �           2606    19988 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public                 postgres    false    221            �           2606    20009 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public                 postgres    false    225            �           2606    20012 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public                 postgres    false    225            �           2606    20199     registrations registrations_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.registrations
    ADD CONSTRAINT registrations_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.registrations DROP CONSTRAINT registrations_pkey;
       public                 postgres    false    235            �           2606    28188    reports reports_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.reports
    ADD CONSTRAINT reports_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.reports DROP CONSTRAINT reports_pkey;
       public                 postgres    false    241            �           2606    20055    stocks stocks_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.stocks
    ADD CONSTRAINT stocks_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.stocks DROP CONSTRAINT stocks_pkey;
       public                 postgres    false    229            �           2606    19981    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public                 postgres    false    220            �           2606    19979    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public                 postgres    false    220            �           1259    20010 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public                 postgres    false    225    225            �           2606    28149 $   expenses expenses_expense_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.expenses
    ADD CONSTRAINT expenses_expense_by_foreign FOREIGN KEY (expense_by) REFERENCES public.users(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.expenses DROP CONSTRAINT expenses_expense_by_foreign;
       public               postgres    false    4819    220    237            �           2606    28154 %   expenses expenses_inserted_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.expenses
    ADD CONSTRAINT expenses_inserted_by_foreign FOREIGN KEY (inserted_by) REFERENCES public.users(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.expenses DROP CONSTRAINT expenses_inserted_by_foreign;
       public               postgres    false    237    220    4819            �           2606    28177 #   incomes incomes_inserted_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.incomes
    ADD CONSTRAINT incomes_inserted_by_foreign FOREIGN KEY (inserted_by) REFERENCES public.users(id) ON DELETE CASCADE;
 M   ALTER TABLE ONLY public.incomes DROP CONSTRAINT incomes_inserted_by_foreign;
       public               postgres    false    4819    220    239            �           2606    20129 *   measurements measurements_added_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.measurements
    ADD CONSTRAINT measurements_added_by_foreign FOREIGN KEY (added_by) REFERENCES public.users(id) ON DELETE SET NULL;
 T   ALTER TABLE ONLY public.measurements DROP CONSTRAINT measurements_added_by_foreign;
       public               postgres    false    4819    220    231            �           2606    20114 -   measurements measurements_customer_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.measurements
    ADD CONSTRAINT measurements_customer_id_foreign FOREIGN KEY (customer_id) REFERENCES public.customers(id) ON DELETE CASCADE;
 W   ALTER TABLE ONLY public.measurements DROP CONSTRAINT measurements_customer_id_foreign;
       public               postgres    false    227    4834    231            �           2606    20124 *   measurements measurements_stock_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.measurements
    ADD CONSTRAINT measurements_stock_id_foreign FOREIGN KEY (stock_id) REFERENCES public.stocks(id) ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.measurements DROP CONSTRAINT measurements_stock_id_foreign;
       public               postgres    false    229    231    4836            �           2606    20119 +   measurements measurements_tailor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.measurements
    ADD CONSTRAINT measurements_tailor_id_foreign FOREIGN KEY (tailor_id) REFERENCES public.users(id) ON DELETE CASCADE;
 U   ALTER TABLE ONLY public.measurements DROP CONSTRAINT measurements_tailor_id_foreign;
       public               postgres    false    220    231    4819            �           2606    20173    orders orders_added_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_added_by_foreign FOREIGN KEY (added_by) REFERENCES public.users(id) ON DELETE SET NULL;
 H   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_added_by_foreign;
       public               postgres    false    4819    233    220            �           2606    20163 !   orders orders_customer_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_customer_id_foreign FOREIGN KEY (customer_id) REFERENCES public.customers(id) ON DELETE SET NULL;
 K   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_customer_id_foreign;
       public               postgres    false    4834    233    227            �           2606    20168    orders orders_tailor_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_tailor_id_foreign FOREIGN KEY (tailor_id) REFERENCES public.users(id) ON DELETE SET NULL;
 I   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_tailor_id_foreign;
       public               postgres    false    4819    220    233            �           2606    20200 ,   registrations registrations_added_by_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.registrations
    ADD CONSTRAINT registrations_added_by_foreign FOREIGN KEY (added_by) REFERENCES public.users(id) ON DELETE SET NULL;
 V   ALTER TABLE ONLY public.registrations DROP CONSTRAINT registrations_added_by_foreign;
       public               postgres    false    220    4819    235            �   �   x�m��
�0�'_�(77I��u�(�����6`����*��@63�D���x����u^�Ҧ��)�)�	��(���R0�X�"6���S��;���,;�;
�&��uj��la�b����ұ\�X�t�ݰgƾC�����2��]��<�^�{ 4?!t�l�٠tPr�	�r�G̷�Y�^Y�g]�";���3!�u�\~      �   �   x���=�0���9E/PdǄ���{
�TjR��+S�K-1�R%�c�oP��! ��fX�e[`����}�>�1}|"��\������Jm�6�U[��=�Imɫm�-y��jK^k�j�%��	LǴ& ���s�0A9��`n6(��	h�G�	��2�����>�m�z�#�2�d{��>�aL�\W8�J�Z      �      x������ � �      �   �   x���1�0Eg�\�ʎ��deg`�mE��"Q$�����b��LO�s�3X�a�^��k�w��]?�`aݟ��vh�x��%����cp�Ȫ�qs�y�^dQ���K��\!]�,J��R&�Ei���Ȣt��
��4("���h��NHեT�V!V�b%�8!W��U�Y�䳖��3���	J�,���>��̦��� ���{�-����r@(M�ʌ1o\u%�      �   �   x�ŕK�0D��� ���=�?G1T]��G�*�b��#�����Oh�����`b>J!�t��֡��ey��ے�_���ѵR����=�����ZWte!g�rJ���C��Sr5_n�,�<]Δ��k�re!7��-��ܜ.r�G�/G�{���ˑ(�%�?!@{CX�����\�����h��7g�Zɾ`e��R� �U      �   3  x�u��n�0���a�8�B�e���7�AIP��k9�����H��PJ�5�]b�#�H��z� �#�N.Ƈ-��(�;�{P-AK��e-�_�빥۹~�~r���~��zrM�1������&��*�ْ����H��B���3m�TP�(�?/9��sxL+�P��e���أ�s͝�>�to�
(J�VU�ږ���2_�Y�{"Sk-��w1�:�Ͱ��D~�����=�P�V*w��=����>a���wʷ�Gm�zy76�"��Zb�t�#`U`+*U�iZ�� �,H�      �   F  x���Kn�@�9��=�2�n*E�EH�D�ܿv��fё`���A%pp	�O�ȁ����}; #�� �c�l��a�Q,��~��L���Y�-�?>}N�X�ª�l�VK_���e�p�2�*��V���yP�=�ٵc�A(�����k��B^ɨC��@1�
,���HzB��٘�i�[2Ōi����t�^�#���(���7d��26��:�)���L���2�)S�0U4S��7S>��&S�Na(�	#J`L4S�R��{sϔ��G3���P�v��|���r�ϫ��?  ����=�oY�}����      �      x������ � �      �      x���;��9r�c}�b���5�d��نl8�#�^�5������Y����!�3�E5�Kd�[��K�/�����_�6����������/��_��_~����u��TK~���-����{�g����.!��G����k����H���?�ӟ��˯�f?���g�?{��so^�\���MP�]PZ�*ч�r
]#�ϐx�.�����g
��5�R�3�N��<1���A�]\ӾG*}��Z����)�$�F\���Vة�S����V�zJ��.=ck�Ա}�u�-ӗ�;Ϭ���_}t�ҧ24�>z*nk�3�\�렂���!(aJ��2�p1�k����҇�,�v��)oc������T���i�J�>3I;��Kn��=Ct�g��#?W�|jh�t~���+�|*�|j�E^�̺T�iQr�Υ�uo%�Tg+%�������lVt��V�!���
z�CPe��Gϭ�Q�X}��+UO��[�#y�}�L�%�b�r^s���}*�z*,��}���V�G�⒟N�;��c�꤄9��MX�4��v����.��uT���=�����40?1�:\�5�VP�f˵�F�|�T��e^��Q���˹CT�77�'�[������CI���dJ����U��D����5�eT'Q�:P'm����ہ4.��v�3�:�w��C���^gw��"NjT��!�|7v��������V��,����K��F�n���vZd/.���ef�c<DU��.w�ur��$f`�>�f��l-�0�Yڱ�����R�w�=�,�~-a��
>���%�����W�} �p@����ejP*0�ۅ�37�ꚫ�0Ի�˝�}����K%XG�q��f��&�TD����*?�F�g6�`�%��IT'e's6%�E�4���*޷�VSwΤV}hkWT�Ӫ��QJ`m����¨\�$�#��㴚��w��G&�(�p֌v�����.�h�S����:d���Nڮy���fc��@�t��ҍ�.��
ưrh1Kr�^��H�Wv������.��<Gˡ���j�.�*�EC)��U\V�_PsX��bc)3H��'�:i���n�"��uc�ę#>Ns-��E�{�Tj���7)ti����z�I����,:tIdjv��F!��&�.d4����͒zRQ�`��˟��ң���W:H���>�쳋���Zц�аҨ�Jkl@)�s���t��6v�����"襇�	�KA+&4��� �%�a��r����^���p+�*��&���]������C�聳./{w#�<m�64 t&�ЛDg�,�@��
/�/���gc�?i�YLE���g�Iji�nמ�'�&�ԓ��bCSu�W3��_EU������Oھ(��c�8;X�-���f��Bn7	�S�Srv�(HSP��tx�ǎcc�?i�����L�ӂ�[��(�b ��I]Q�3��M�js@��W�&��#�O�N�2IR �3jرd"�8e_@�.[�.Z����>L�-��}�pʍ^��Nڮ� � w�y��e�қ҈ڄ$��Er���
3��Ň=�u,7zecW8i�ڕ�u�`'�O*��O�NA@��P�H;��Q�	3�>�I�;V�Z�.u�P��u�X�;&iԌ�M���� Stm�
(~.���k�fڻ�|��r.W*�9xx	�a�f���F�A</��yT'm�ٛA����A�vu�K�It3��g� a\Is��ĕ��k�C6l�
'mG��8����͚`�2�W$���"\c�M3`��Q�ҥ>���^RZ����H���ڒ^�"�rL*F_}�a����h�T&x�~.������1{�R[�k)�;�AeƮ�N����!R��EY��\}�6v�#�
0�M0\���ǦO7�|����f������M��F?���N�>wQ�\t��fm/�����d4l<�z@�\y )m>��c����/=i;�hǕ`[�e�pk_�G#����,|Oe��/�<�>�i�Duܓ�Vd��ʀ�� 3y�k���ӏV$��L$&��8���ϣ:r;���[�I��k(�H��k@hM4�e�Q&�h/!�CTX��.=i;昔i����^y�(%��@ � O`F���YXf��W$�wc����ll<��MjmUd'� ���¥�u�|���1��V0��z������4�v/"���izU�'�m�M����O^ 	�}Ʈ��GS�t��k8��w�c���}�a����:^j-#�IC��R����s�R�m�JV:%�j|U�����y�����#��=�D�#��h��S�_Y��،��ԹP������M~^��إ'm� ˢ�����RE;K
H��2S�a����=6�A{��崠�WG�G������#���ty�Req�����ܡ�Nx�q��4�iT�VS�Br�_Q��G����Iۗ*T�7���0ߊX�X"y��i����u%���h`���ԏ�1vœ�;��ul�6��M�S�Z��%2��(g�t��N�o�W���Ke�~�8��+������۬���.
+	G�c�xU+�ޯ�FN�4;V�A��|2���K����D���BĐ��j3jG�������'})7�3�e��Gn�]�|����F�ǞtU�]����F�u�`�� �7��!^�ɼ��|�J��$m�9¢Rpz��\tH�zn3�C<HH��of�P�Ϣ:i{�u�y�nC�X)�у��YzRl�ꊗ�Z�q�B�x�)�v�,�*jcW<i;n� Nߠ�^&���vf%t8
i�L�	��:T-u`�Շ�ccW<i{]��N� >6j��=Z���Z��1���*�k�s��}�yTǳTJ	-:\:�.��}Ԉ�2%�ڴej�i�c-�q�1���WϣJ'mCs����v�i;DR��%�5�W3���C��~0�������d,��I�1v����di�.�s�mk҆x�W.�v���54���J����i��Du��A(�L��5�:=�K{��a�p��F4;�KM�V]0��[�%��ɹ:i;�h�c��R� _�ݱ��vǪ1l�8�8x����ފR��لE���c�J'm/���]�����r�U�p�&"�~���T�=�Oz�$��~��)���9�m�킃O�?�HJ��r戏&�;��l��d��/��X7|��J'm��F��}�kV�~,	�P|=��,IL2=�6��MT�V�.?�Y�7�d�h>�M��-�`&ӎU��zr���*&[���S?�ѿ��xM��`7d
�)k"	݁�*Ϸ�}�Xg�g�C�+8��{�1~.���wT���`�X��}+��S#�<Q�:�V�`�#�ԡ�dٯ=�B�r哶�U�a���d�p;o�oN�0M̑�BZpy-��b91Fib�$�,���2&�a�`�X<vK�m���	D$�Q�O���Ձ$��ӿ��,����D[�T�wM(ӰCo�2$ >;�N)N
�1����4��x��ۣ��q��q
^��R�{�v�����#�Ѷ��{%G�Q���ĳ�Nھ(�YE;���lP'-�XV3����8�< �$�i�cYĆ^����xO�'�<͐��v2�JJݮ�eG4M�<wu2��V��/,��*n=�賨N��u_�5�$5)]��<�t�1�t�3����[늚Q�!Q��4W7n"�+��=�iE_6k�%9ȶ[��N���`MCӁU�-�"��w�Ъ4Ƀ|�q���͜"�ϰ;.�i$v�L%G��9��CWH/W���q�Euܓ����3�{�e'~��We���R2J�M�he�\v�v�I�<Du�b��I�wMba�F�#%���ohxM�xP�j.>�U�9����h�sQ����
k5��޷M���n����-��1L�1���]�!������,��Y*�f��W��=�0_R�kC�e�6�q��dm#�5έ��m��|�볱���=O�H�
,��'j�`I�@>�=��]p ��U��W�w񹨎{2j\܂��R�U)�&CV�f��P�nozV�ib"�� 3МO����b��I��.�o��F�h��@�5;V�Ѝ��0�L���`B��
:j�����N%��M��, �  h�{�����]��0��j��7��ˮv'�sQ������o�0��|% �y�'�I|��-[�y��T���/�*���������ҌT�+��aG��Bb�]�V��s�\	�����3�X���z���N���u2����"��b�NQ`g�_+HYj�qMA�>F->U=��D�/N��Kôc9�
N��T�&�y�j	�m��E __�g�>���]�|��.�ł�*shqs�k�}5����J�*���Жږ�mTA~qbw��=zy7vՓ�G Bo[���Կ�{"�6��v{�v�/xlW���ֱ�����{��A���I۩>��̉p��d	E�L��U �F���y����6��qW�U���I������2��e����}������ۈ3)d[�y��Ov �Eo�*2W'm��EZ
�v�< �E�j���v� ��n����
���v!�?�9�G���໱���]�]!�n s�	�U����;Z�I��.
$ߥ3M$�~vv��ETA���s���I�1T�Zz�9�h�L�b�s�foL��A��a���E^���-�w��ލ]���y���$zsZ"�6�u-����� ��g��,#
��,t6=91�A�ycW=���P�
'��]��(#
�m�n_h�;�9��I�����~�@��|�]NN�.��屗m�����g�=<�'�
f�+�����h'�~{͂�I��wc�u<M����_I��7,rt�T�6�th��y�Kt�����[�w!|����a�/�X2N�*2�g�v�{��0b��͐[�?4�UJ(����ݡ�����wc�u�w��Z�Q��
���J	:�h;�y͈m��j%��W�Z�έ�r�}�n����ܱW�Z�{W}U�U.�m`�v�A��v�/8��ۻ	�Θ.��o����XD#��»��n�m1۳T�*��&}2�/;�9\sΔѐ֘(:hw=�[�+�a���[3>Au�����%o4SG�q2���9��]^x��G	v<0ҫ����c�u�x@9�k{�ꏚ�ݳ��k&��S�؇˯5�=�e6��d��t�-oR���$��<��q���%��Lh�����^7mo����Vh��M��R*wH����ލ�I�c�V��I(�Ď���@�h�#�.ֲ�a'���l���7����-�w/T����ʝrǌB��r��xs�_�\� �s \��B��m'A�_<�a��N*Ϫ�j7Q�tZ`��
F|�z�L�m@���L0b<�;��	��!�şs�1FX'��%Զd�T��v��>�`�]P��!x�f�&�J�W�w{��\�+���#��K�eW�D�Ȩ$,�i�]�=(���_A�][�˙���*ZW���o!ԛ����?>S�ȶ�/JD��{[S�c���y��.�d�p�
��������E�n��N*o/I�e�j���E��vX���������8�60�a%�d�������a/EN{��l~�,�}��s{��q�sD8h\��c�M��+�2�3A�1FX���6��N.7>�-n�Z�'�,]�_4|��َ��Z8kPX��F~ު	A��?�a���(_�������� �5�t��Zq6{��$�����~��Wa��W~#�#˗� ���H)�7�t�n�{v�v�\�0uh�������"����'B�Y�����겛;���to׳��{�w��Vv��2���R)��:�%�����1�:�V]�J{�,�,�^� �bJ ¦\��T�`X�D�vP��Z�<^-������I�݊��F;b�z�x���d�DJw��64��\�U�]`�F�S��)��;\�0FXw*���~��Ͽ.?�;��NeۙI��j�u�|�gc��n��[�� �ML�r{�`���w���q�ɼ�컋=['�PQ��,3?�n0,
�^�]��͓P�ٲ-�6ʓ�
dҷ�Ʈ_������a�      �   v  x����o�0��㯈�k�����0�к��S��-.	I�$��_?'f�%���<qzdG���3,�Ա��>��E,x��0���1�p�H��G���%�X�cx(�:ɮ�}���aC-<K��"�z^_�N�u1?�' �՟�?�ךޫ��ErGӫ0W�����B�)�<�	�R�ζ8����8@#�?h�NOZ�����b�ޞ���U��)�È�U�]��]gu��� :��ݤQM�i�����(�ּN/�&������r���#�#B�����*���ɸ�h(NU�iq���[s�\�4�靛+��8ᧀcT�l1�qg�u��L�,��P\hpX�{n����ި�WQ%�����X{M4ec�y!�hڙ�u�S�ZB<�%	C���nI:<����F�_����W�S�15�1D<���u�ۻ�!�(��<��SӃvk�Bc�繽�־h��yz���� a�m�R������O�70ǚ��ͩ1�m]k��p�2�mz��
�\��`J6F�Xk�l�5�W�ȝO�
":�F��hjuK�gM�Ʊؤv��>��E�)����a�5u-�문�!bcL[5�$�Z���4��f�k"u      �   �   x���1
B1�=��I���� 8���x{�E�����e�O�[�O����"� ��Qe�$GLHr�\�����S'D5ۮ}4�I�I|�񋚱�m�Q��/��Ӈ��j�G5c�񓚱�f �Yl�Գ6 ��~waQ,z�s��O������Ǡf�G_iJ���J��7(����g�/&�RP��&��O��M��f�?�7?�_��Y��U�2���wYYR�      �   ~  x����n�0���S��ر�ϭPQQ(�J.[�j\�#��o�m�T�U��h�if�ƅ��mO�ݙ-,3����3�]AD�(�Q~$�Q��|�p=��<Z�'#�;��Ȥ-�P�a$��m-	K��j���<��_(��A1��pMmj�)%����c�?q�Я�֙���EIv6B��cJ��)N��(��2�m���;PlM���ף�ѥ)L�=Y��y���-K�)d�[|[�5�$0'���3���q�قfCLK8��Ǽ���(?��A�e\�W	>�+
1S��Iq=&햚��u���7�OVz���U�a$yM+C��)j ��ݯ�a�Ԁ[&R��a��Og����������\���CT!D�p1fM1�n����L�      �   T  x�͖[s�0ǟç࡯�$\�j]q����Ngv"��%(��t��8��BN�39�r�	�)ݔQD|���Z�8������>�!x7a��>=V��bMт��իj[��4ճ��_��\��/����/]����b�����H7a��&`@6^�~ X,"ݙ��p�*�K��6���ee1�^�u�]�Wc�|_����}nͲk l*Є��&(�����)�g��%%Eq`���O
��s��0�nb�&�����D\4�1._(|�����jdj�����Z��]h��v��qHk��1e��(����	�R��?C9���|��LI�i.^"����%-�)I�G¢�	��e�Y\�-Ӕ���M�]��$`_�.�#�}�6����-E�5���<V&�$��٪�!��i�Y~��D���*R��%\�E�ȩGS�V�H���>$uY�n�
�i�/����5�m��p��⠒�([���6��ޠ�v�#t��T\-ݹdN��ԏ"º�aSSni� ����@0�Iٚ��$<�������|^Vt��1V��cf���o�R>�k�Ns����Mx�A�9�u'     