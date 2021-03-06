import Vue from "vue";
import Layout from "./views/Layout";
import Page from "./components/Products/Page";
import PageHeader from "./components/Products/PageHeader";
import PageBody from "./components/Products/PageBody";
import Portlet from "./components/Products/Portlet";
import PortletHead from "./components/Products/PortletHead";
import PortletBody from "./components/Products/PortletBody";
import PortletFoot from "./components/Products/PortletFoot";
import Table from "./components/Products/Table";
import TableRow from "./components/Products/TableRow";
import PaginationLinks from "./components/Pagination/PaginationLinks";
import SelectFilter from "./components/Filters/SelectFilter";
import TextFilter from "./components/Filters/TextFilter";
import SortingIcon from "./components/Index/SortingIcon";

Vue.component("layout", Layout);
Vue.component("page", Page);
Vue.component("page-header", PageHeader);
Vue.component("page-body", PageBody);
Vue.component("portlet", Portlet);
Vue.component("portlet-head", PortletHead);
Vue.component("portlet-body", PortletBody);
Vue.component("portlet-foot", PortletFoot);
Vue.component("resource-table", Table);
Vue.component("table-row", TableRow);
Vue.component("pagination-links", PaginationLinks);
Vue.component("select-filter", SelectFilter);
Vue.component("text-filter", TextFilter);
Vue.component("sorting-icon", SortingIcon);

/*
const Components = {
    Layout,
    Page,
    PageHeader,
    PageBody,
    Portlet,
    PortletHead,
    PortletBody,
    PortletFoot,
    Table,
    TableRow,
    PaginationLinks,
    SelectFilter,
    TextFilter,
    SortingIcon
  };
  
  Object.keys(Components).forEach(name => {
    Vue.component(name, Components[name]);
  });
  
  export default Components;
  */
