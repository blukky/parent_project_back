<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- meta block -->
    <title>Collapsable and resizable Layout - DHTMLX Layout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <script type="text/javascript" src="{{ asset("js/suite.js")  }}"></script>
    <link rel="stylesheet" href="{{ asset("css/suite.css")  }}">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css?v=6.4.2"
        media="all" rel="stylesheet" type="text/css">
    <!-- auxiliary controls for interacting with the sample -->
    <link rel="stylesheet" href="https://snippet.dhtmlx.com/codebase/assets/css/auxiliary_controls.css">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css?v=6.4.2"
        media="all" rel="stylesheet" type="text/css">
    <!-- custom sample head -->
    <style>
        .user-info_container {
            padding-top: 8px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .user-info_title {
            font-family: Roboto;
            font-style: normal;
            font-weight: 800;
            font-size: 16px;
            line-height: 24px;
            margin-top: 8px;
            color: red;
        }

        .dhx_sidebar--minimized .user-info_title {
            visibility: hidden;
        }
    </style>
</head>

<body>
{{--<div style="height: 100%" id="sidebar"></div>--}}
<div id="layout" style="height: 100%;"></div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script>
    const data = [
        {
            id: "lk",
            value: "Личные данные",
            icon: "mdi mdi-view-dashboard",
            items: [
                {
                    id: "personal_data",
                    value: "Персональные данные",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "change_password",
                    value: "Смена пароля",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "notification",
                    value: "Оповещение",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "guide",
            value: "Справочники",
            icon: "mdi mdi-chart-line",
            items: [
                {
                    id: "classification",
                    value: "Классификаторы",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "dictionary",
                    value: "Словари",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "references",
                    value: "Справочники",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "organization",
            value: "Организации",
            icon: "mdi mdi-file-chart",
            items: [
                {
                    id: "reference_organization",
                    value: "Сводный справочник организаций",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "aliances",
                    value: "Альянсы (объединения)",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "payment_method",
                    value: "Платежные системы",
                    icon: "mdi mdi-tag"
                },
                {
                    id: "register_organization",
                    value: "Реестры организаций",
                    icon: "mdi mdi-tag",
                    items: [
                        {
                            id: "book_gos_org",
                            value: "Книга государственной регистрации кредитных организаций",
                            icon: "mdi mdi-plus"
                        },
                        {
                            id: "yur_entity",
                            value: "Единый государственный реестр юридических лиц",
                            icon: "mdi mdi-view-list"
                        },
                        {
                            id: "strah_delo",
                            value: "Единый государственный реестр субъектов страхового дела",
                            icon: "mdi mdi-tag"
                        },
                        {
                            id: "pension_fond",
                            value: "Реестр негосударственных пенсионных фондов",
                            icon: "mdi mdi-tag"
                        },
                        {
                            id: "sro_fr",
                            value: "Реестр СРО ФР",
                            icon: "mdi mdi-tag"
                        }
                    ]
                },
                {
                    id: "rf_bank",
                    value: "Банк России",
                    icon: "mdi mdi-tag",
                    items: [
                        {
                            id: "management",
                            value: "Руководство",
                            icon: "mdi mdi-plus"
                        },
                        {
                            id: "schema",
                            value: "Структура",
                            icon: "mdi mdi-view-list"
                        },
                        {
                            id: "main_inspect_br",
                            value: "Главная инспекция БР",
                            icon: "mdi mdi-tag"
                        }
                    ]
                }
            ]
        },
        {
            id: "frame",
            value: "Кадры",
            icon: "mdi mdi-file-chart"
        },
        {
            id: "offer",
            value: "Предложения",
            icon: "mdi mdi-file-chart",
            items: [
                {
                    id: "offer_departament",
                    value: "Предложения департаментов",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "offer_mi",
                    value: "Предложения МИ",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "upload_offer",
                    value: "Загрузка предложений",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "resource",
            value: "Планироание ресурсов",
            icon: "mdi mdi-file-chart",
            items: [
                {
                    id: "busy_employee",
                    value: "Занятость сотрудников",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "security_check",
                    value: "Обеспеченность проверок",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "workload_departments",
                    value: "Нагрузка подразделений",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "plan",
            value: "Планы",
            icon: "mdi mdi-file-chart",
            items: [
                {
                    id: "summary_plan",
                    value: "Сводный план",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "single_plan",
                    value: "Единый план",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "reconf_plan",
                    value: "Сверка планов",
                    icon: "mdi mdi-tag"
                },
                {
                    id: "coordination_inspection",
                    value: "Координация проверок",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "check",
            value: "Проверки",
            icon: "mdi mdi-file-chart",
            items: [
                {
                    id: "verify",
                    value: "Проверки",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "period_verify",
                    value: "Периодические проверки",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "upload_file",
                    value: "Загрузка файлов",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "analytics",
            value: "Аналитика",
            icon: "mdi mdi-square-edit-outline",
            items: [
                {
                    id: "financial_indicators",
                    value: "Финансовые показатели",
                    icon: "mdi mdi-plus"
                },
                {
                    id: "quality_verify",
                    value: "Качество проверок",
                    icon: "mdi mdi-view-list"
                },
                {
                    id: "work_extract",
                    value: "Работа с выписками",
                    icon: "mdi mdi-tag"
                },
                {
                    id: "upload_extract",
                    value: "Загрузка выписок",
                    icon: "mdi mdi-tag"
                }
            ]
        },
        {
            id: "administrator",
            value: "Администрироание",
            icon: "mdi mdi-file-outline"
        }
    ];
    const sidebar = new dhx.Sidebar(null, {
        css: "dhx_widget--border_right"
    });

    sidebar.data.add({
        id: "toggle",
        css: "toggle-button",
        icon: "mdi mdi-backburger",
    });

    sidebar.data.add({
        type: "customHTML",
        id: "userInfo",
        css: "user-info_item",
        html: `<div class='user-info_container'>
                    <div class='user-info_title'>
                        Макет АС
                    </div>
               </div>`

    });

    sidebar.events.on("click", function (id) {
        if (id === "toggle") {
            const toggleItem = sidebar.data.getItem("toggle");
            sidebar.toggle();
            if (sidebar.config.collapsed) {
                toggleItem.icon = "mdi mdi-menu";
            } else {
                toggleItem.icon = "mdi mdi-backburger";
            }
        }
    });

    sidebar.data.add(data);

    const tabbar = new dhx.Tabbar(null, {
        css: "dhx_widget--bordered",
        mode: "top",
        views: [
            {tab: "Dashboard"},
            {tab: "Reports"},
            {tab: "Tickets"},
            {tab: "Users"},
            {tab: "Applications"}
        ],
        tabAlign: "left",
        noContent: true
    });
    const layout = new dhx.Layout("layout", {
        cols: [
            {
                id: "sidebar",
                height: "content",

            },
            {
                id: "tabbar",
                height: "content"
            }
        ],

    });
    layout.getCell("sidebar").attach(sidebar);
    layout.getCell("tabbar").attach(tabbar);
    $("div[data-cell-id='sidebar']").css("flex", "");
</script>


</html>


