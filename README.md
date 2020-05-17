# Notion Date Icon

A simple web application that returns a minimal icon including the current date with preset periods. I use this to integrate dynamic icons into my [Notion.so](https://notion.so) workspace.

## Parameters

| parameter | type   | options                                   |
| --------- | ------ | ----------------------------------------- |
| `period`  | String | "day", "week", "month", "quarter", "year" |

## Options

| option    | description                                          | output   |
| --------- | ---------------------------------------------------- | -------- |
| `day`     | This day of the month as 2 digits with leading zeros | 01 to 31 |
| `week`    | This calendar week as 2 digits                       | 01 to 52 |
| `month`   | This month as 2 digits with leading zeros            | 01 to 12 |
| `quarter` | This quarter as 1 digit with leading "Q"             | Q1 to Q4 |
| `year`    | This year as 2 digits with leading zeros             | e.g. 20  |
