export default {
    /*
     * AUTH
     */
    REGISTER                : 'auth/register',
    LOGIN                   : 'auth/login',
    LOGOUT                  : 'auth/logout',

    /*
     * USER
     */
    ME                      : 'auth/me',
    USER                    : 'auth/me/user',
    USER_DETAIL             : 'auth/me/user/detail',
    SAVING_USER_INFO        : 'users',
    SAVING_USER_CHILD_INFO  : 'users/child',

    API_BASE_URL            : '/api/v1',

    /*
     * EVENT
     */
    EVENT_SEARCH_EVENT_LISTS: 'events/search/eventList',
    EVENT_SEARCH_CALENDAR   : 'events/search/calendar',
}
